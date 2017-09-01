<?php
namespace metooweb\oldtailor\customer\address;

use metooweb\oldtailor\Request;

class Lists extends Request{
    
    protected $rules = [
        "field"=>"request"
    ];
    
    protected $method = "customer_address_list";
    
    
    
}