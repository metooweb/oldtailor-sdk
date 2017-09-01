<?php
namespace metooweb\oldtailor\struct;

class Payment {
    
    /**
     * 支付状态
     * @var bool
     */
    public $status;
    
    /**
     * 支付时间
     * @var int
     */
    public $time;
    
    /**
     * 支付方式   amount ， weichat
     * @var string
     */
    public $method;
    
    /**
     * 支付金额
     * @var float
     */
    public $amount;
    
    /**
     * 支付流水号
     * @var string
     */
    public $sn;
    
}