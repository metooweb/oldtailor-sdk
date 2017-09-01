<?php

namespace metooweb\oldtailor\sku;

use metooweb\oldtailor\Request;
use metooweb\oldtailor\struct\Sku;

/**
 * @method Sku format() public 格式化
 */
class Get extends Request{
    
    protected $method = "goods_sku";
    
    protected $fields = [
        "barcode"=>"条形码",
        "sku_id"=>"sku_id",
        "field" =>"获取字段"
    ];
    
    protected $rules = [
        "barcode" => "length:8,9",
        "sku_id"  => "number",
        "field"   => "require"
    ];
    
    
    public function setBarcode(string $barcode) : Get{    
       
        $this->param('barcode' , $barcode );
        
        return $this;
    }    
    
    public function setSKuId(int $sku_id) : Get{
        
        $this->param('sku_id', $id);
        
        return $this;
    }
 
    
}

