<?php

class articleModule extends Module {
    public function databasesList(){
        return $databases = $this->DB->execute('SHOW DATABASES');
    }
}
?>
