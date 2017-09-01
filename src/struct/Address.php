<?php
namespace metooweb\oldtailor\struct;

/**
 * 收货地址
 * @author metooweb
 */
class Address {
    
    /**
     * 地址ID
     * @var int
     */
    public $id;
    
    /**
     * 收货人姓名
     * @var string
     */
    public $name;
    
    
    /**
     * 手机号码
     * @var string
     */
    public $mobile;
    
    
    /**
     * 地区
     * @var District
     */
    public $district;
    
    /**
     * 地址
     * @var string
     */
    public $address;
    
    /**
     * 是否为默认地址
     * @var bool
     */
    public $default;
    
    
}