<?php
namespace metooweb\oldtailor\customer\address;

use metooweb\oldtailor\Request;

class Get extends Request{
    
    protected $method = "customer_address_get";
    
    
    public function setId(int $id){
        
        $this->param('id', $id);
        
        return $this;
    }
    
    
}