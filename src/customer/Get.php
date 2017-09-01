<?php
namespace metooweb\oldtailor\customer;

use metooweb\oldtailor\Request;

class Get extends Request{
    
    protected $method = "customer_get";
    
    protected $rules = [    
        "field"=>"require",
    ];
    
    
    public function setId(int $id){
        
        $this->param('id', $id);
        
        return $this;
    }
    
    public function setUserName(string $username){
        
        $this->param('username', $username);
        
        return $this;
    }
    
    public function setMobile(string $mobile){
    
        $this->param('mobile', $mobile);
        
        return $this;
    }
    
    
    
    
    
    
    
}