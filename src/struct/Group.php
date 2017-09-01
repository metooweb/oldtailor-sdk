<?php
namespace metooweb\oldtailor\struct;

class Group{
    
    /**
     * 分组ID
     * @var int
     */
    public $id;
    
    /**
     * 分组名称
     * @var string
     */
    public $name;
    
    
    /**
     * 分组折扣
     * @var float
     */
    public $discount;
    
    /**
     * 是否为默认
     * @var bool
     */
    public $default;
    
}