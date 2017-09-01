<?php

namespace metooweb\oldtailor;

use think\Validate;
use Hprose\Formatter;
use metooweb\oldtailor\struct\Error;
 
abstract class Request implements Service{
    
    private   $params  = [];
    private   $rpc;
    private   $error;
    
    protected $rules   = [];
    protected $message = [];
    protected $fields  = [];
    protected $method  = "";
    protected $response;
    
    public function __construct(){
        
        $this->rpc = Client::get();
    }
    
    protected function param(string $name , $value){
        
        $this->params[$name] = $value;
        
        return $this;
    }
    
    public static function instance(){
        
        
        return new static;    
    }
    
    public function setFields(string $fields){
        
        $this->param('field', $fields);
        
        return $this;
    }
    
    
    public function execute(){
        
        $validate = Validate::make($this->rules , $this->message ,  $this->fields  );
        
        if( !$validate->check($this->params) ){
            
            print_r( $validate->getError() );
            
        }else{
           
            isset($this->params['field']) && $this->params['field'] = explode(',', $this->params['field']);
            
            try {
                
                $this->response = $this->rpc->{$this->method}($this->params);
                
            } catch (\Exception $e) {
 
                $this->error = json_decode($e->getMessage());
            }
            
        }

        
        return $this;
    }
    
    /**
     * 
     * @return Error || null
     */
    public function getError(){
        
        
        return $this->error;
    }
    
    public function format(){
        
        return $this->response;
    }
    
    
}
