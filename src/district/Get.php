<?php
namespace metooweb\oldtailor\struct;

use metooweb\oldtailor\Request;

/**
 * 
 * @author metooweb
 * @method District format()
 */
class Get extends Request{
    
    protected $method = "";
    
    public function setId(int $id){
        
        $this->param('id', $id);
        
        return $this;
    }
    
}