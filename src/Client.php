<?php

namespace mitu\oldtailor;

use Hprose;

class Client{
    
    protected static $pool;
    
    public static function set(string $uri , string $name = "default" ){
        
        $client = Hprose\Client::create($uri , false);
        
        self::$pool[$name] = $client;       
    }
    
    
    public static function get(string $name ="default" ){
        
        return self::$pool[$name];
    }
    
    
    
    
}