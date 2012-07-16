<?php
class Module {
    protected $reg;
    public function __construct($registy){
        $this->reg = $registy;
    }
    
    public function __get($key){
        return $this->reg->get($key);
    }
}
?>