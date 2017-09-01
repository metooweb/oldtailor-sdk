<?php
namespace metooweb\oldtailor\category;

use metooweb\oldtailor\Request;

class Lists extends Request {
    
    protected $method = "category_list";
    
    protected $rules = [
        "field"=>"require",
    ];
    
    
    public function setParent(int $parent_id){
        
        $this->param('parent_id', $parent_id);
        
        return $this;
    }
    
    
}