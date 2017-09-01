<?php
namespace metooweb\oldtailor\struct;

use metooweb\oldtailor\Request;

/**
 * 
 * @author metooweb
 * 
 */
class Lists extends Request {
    
    protected $method = ""; 
    
    public function setParent(int $parent_id){
        
        return $this->param('parent_id', $parent_id);
        
        return $this;
    }
    
}