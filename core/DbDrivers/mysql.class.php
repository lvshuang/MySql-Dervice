<?php
/**
 * @desc 数据库操作类
 * @author LvShuang lvshuang1201@gmail.com
 * @version 1.0
 */

final class mysql {
	public $count = 0;
	public $link;
	public $result;
	public $lastId;
	public $error;
	public $row = array();
	public $rows = array();
	
	/**
	 * @desc 构造函数：数据库连接，选择数据库，设置编码等。所带参数为特殊数据库
	 * @param String $specialDb
	 */
	public function __construct($specialDb=''){
		$dbName = empty($specialDb) ? DB_NAME : $specialDb;
		
		if(!$this->link = mysql_connect(DB_HOST, DB_USER, DB_PWD)){
			die("不能链接到数据库：" . mysql_error());
		}
		mysql_select_db($dbName, $this->link) or die(mysql_error());
		mysql_query("SET NAMES UTF8") or die(mysql_error());
	}
	
	/**
	 * @desc 执行SQL并返回执行结果
	 * @param String $sql
	 */
	public function execute($sql){
	    //释放之前的查询结果
	    if(is_resource($this->result)){
	        mysql_free_result($this->result);
	    }
	    //执行SQL，失败返回false
	    if(!$this->result = mysql_query($sql, $this->link)) {
	    	$this->error = "SQL语句执行失败：" . mysql_error();
	    	return false;
	    }
	    //获取最后响应的ID
	    $this->lastId = mysql_insert_id($this->link);
	    //非资源类型直接返回操作是否成功
	    if(!is_resource($this->result)) return $this->result;
	    //返回查询结果
	    $data = array();
	    
	    $this->count = 0;
	    while($row = mysql_fetch_assoc($this->result)){
	        $data[] = $row;
	        $this->count ++;
	    }
	    
	    $this->row = $data[0];
	    $this->rows = $data;
	    return $data;
	    
	}

    /**
     * @desc 从数据库获取一条记录
     * @return Array
     */

    public function getOne($sql){
        $data = $this->execute($sql);
        return $data[0];
    }
	
	/**
	 * @desc 过滤传入的字符串
	 * @param String $str
	 */
    public function escape($str){
        return mysql_real_escape_string($str, $this->link);
    }
    
    /**
     * @desc 关闭数据库连接
     */
    public function __destruct(){
    	mysql_close($this->link);
    }
}
?>