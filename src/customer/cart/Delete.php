<?php

namespace metooweb\oldtailor\customer\cart;

use metooweb\oldtailor\Request;

class Delete extends Request{
    
    protected $method = "customer_cart_delete";
    
    public function setSkuId(int $sku_id){
        
        $this->param('sku_id', $sku_id);
        
        return $this;
    }
    
    
}