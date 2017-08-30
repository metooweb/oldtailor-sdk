<?php

namespace mitu\oldtailor\customer\sku;

use mitu\oldtailor\Request;

class Get extends Request{
    
    protected $method = "";
    
    
    public function setBarcode(string $barcode){    
       
        $this->field('barcode' , $barcode );
        
    }
    
    public function setSKuId(int $sku_id){
        
        $this->field('sku_id', $id);
        
    }
    
    protected function check() : bool{
        
        return false;
    }
    
    
}
