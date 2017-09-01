<?php
namespace metooweb\oldtailor\struct;

class Store {
    
    /**
     * 门店ID
     * @var int
     */
    public $id;
    
    /**
     * 门店名称
     * @var string
     */
    public $name;
    
    
    
    /**
     * 门店现金券
     * @var int
     */
    public $coin;
    
    
    /**
     * 会员
     * @var Customer
     */
    public $member;
    
}