<?php
namespace metooweb\oldtailor\brand;

use metooweb\oldtailor\Request;

class Lists extends Request {
    
    protected $method = "brand_list";
    
    protected $rules = [
        "field"=>"require",
    ];
    
}