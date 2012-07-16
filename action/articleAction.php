<?php

class articleAction extends Action{
    public $articleId;
    
    public function article(){
//     	$id = $_GET['id'];
    	$content = "文章内容";
    	$title ="文章标题";
    	
    	echo "<h1>" . $title . "</h1>";
    	echo $content;
    	$module = new articleModule($this->registry);
    	$databasesList = $module->databasesList();
    	$this->assign('list', $databasesList);
    	$this->display('article.tpl');
    }
}
?>