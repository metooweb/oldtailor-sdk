<?php
namespace metooweb\oldtailor\customer\address;

use metooweb\oldtailor\Request;

class Delete extends Request{
    
    protected $method = "customer_address_delete";
    
    
    public function setId(int $id){
        
        $this->param('id', $id);
        
        return $this;
    }
    
    
    
}