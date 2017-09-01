<?php
namespace metooweb\oldtailor\customer\cart;

use metooweb\oldtailor\Request;

class Update extends Request{
    
    protected $method = "customer_cart_update";
    
    public function setSkuId(int $sku_id){
        
        $this->param('sku_id', $sku_id);
        
        return $this;
    }
    
    public function setNumber(int $number){
            
        $this->param('number', $number);
        
        return $this;
    }
    
    
    
    
}