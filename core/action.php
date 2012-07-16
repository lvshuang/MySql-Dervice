<?php
abstract class Action {
	protected $registry;
	protected $smarty;
	public function __construct($registry){
		$this->registry = $registry;
		$this->smarty = $this->registry->get('smarty');
	}
	
	protected function assign($name='', $value=''){
	    
	    $this->smarty->assign($name, $value);
	}
	
	protected function display($tpl){
		$this->smarty->display($tpl);
	} 
}
?>