<?php
namespace metooweb\oldtailor\customer\coin;

use metooweb\oldtailor\Request;

class Log extends Request{
    
    protected $method = "customer_coin_log";
    
    public function setType(int $type){
        
        $this->param('type', $type);
        
        return $this;
    }
    
    
    public function setStartTime(int $start_time){
        
        $this->param('start_time', $start_time);
        
        return $this;
    }
    
    
    public function setEndTime(int $end_time){
        
        $this->param('end_time', $end_time);
        
        return $this;
    }
    
    
    
    public function setPage(int $page){
        
        $this->param('page', $page);
        
        return $this;
    }
    
    public function setLimit(int $limit){
        
        $this->param('limit', $limit);
        
        return $this;
    }
    
}