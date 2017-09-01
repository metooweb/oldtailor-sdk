<?php
namespace metooweb\oldtailor\brand;

use metooweb\oldtailor\Request;

class Get extends Request {
    
    protected $method = "brand_get";
    
    protected $rules = [
        "field"=>"require",
    ];
    
    
    public function setId(int $parent_id){
        
        $this->param('id', $parent_id);
        
        return $this;
    }
    
    
}