<?php
namespace metooweb\oldtailor\struct;

class Customer{
    
    /**
     * 用户ID
     * @var int
     */
    public $id;

    /**
     * 用户名
     * @var string
     */
    public $username;
    
    /**
     * 用户手机号码
     * @var string
     */
    
    public $mobile;
    
    /**
     * 用户余额
     * @var int
     */
    public $money;
    
    
    /**
     * 用户现金券
     * @var int
     */
    public $coin;
    
    /**
     * 冻结现金券
     * @var int
     */
    public $frozen_coin;
    
    /**
     * 用户组
     * @var Group
     */
    public $group;
    
    /**
     * 收货地址
     * @var array
     */
    public $address;
    
    
    /**
     * 用户状态
     * @var int
     */
    public $status; 
    
}