<?php

namespace metooweb\oldtailor;

abstract class Request implements Service{
    
    private $fields = [];
    
    protected function field(string $name , $value){
        
        $this->fields[$name] = $value;
        
        return $this;
    }
    
    
    
}
