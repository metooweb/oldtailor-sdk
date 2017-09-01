<?php
namespace metooweb\oldtailor\customer\address;

use metooweb\oldtailor\Request;

class Update extends Request{
    
    protected $method = "customer_address_update";
    
    
    public function setId(int $id){
        
        $this->param('id', $id);
        
        return $this;
    }
    
    public function setName(string $name){
        
        $this->param('name', $name);
        
        return $this;
    }
    
    public function setMobile(string $mobile){
        
        $this->param('mobile', $mobile);
        
        return $this;
    }
    
    public function setDistrict(int $district_id){
        
        $this->param('district_id', $district_id);
        
        return $this;
    }
    
    public function setAddress(string $address){
        
        
        $this->param('address', $address);
        
        return $this;
        
    }
    
    public function setDefault(bool $default){
        
        
        $this->param('default', $default);
        
        return $this;
    }
    
    
    
}