<?php
namespace metooweb\oldtailor\struct;

/**
 * 订单
 * @author metooweb
 *
 */
class Order {
    
    /**
     * 订单号
     * @var string
     */
    public $sn;
    
    /**
     * 商品金额
     * @var float
     */
    public $sku_amount;
    
    /**
     * 运费金额
     * @var float
     */
    public $delivery_amount;
    
    
    /**
     * 真实价格
     * @var float
     */
    public $real_amount;
    
    /**
     * 已支付金额 后期可作 多支付方式组合，或者分步支付
     * @var float
     */
    public $paid_amount;
    
    /**
     * 现金券 ， 订单类型为现金券充值时作为 充值现金券数量
     * @var int
     */
    public $coin;
    
    /**
     * 现金券抵用金额
     * @var float
     */
    public $coin_amount;
    
    /**
     * 优惠金额
     * @var float
     */
    public $discount_amount;
    
    /**
     * 订单类型  1:普通订单 ， 2:现金券充值 
     * @var int
     */
    public $type;
    
    
    /**
     * 订单支付
     * @var Payment
     */
    public $payment;
    
    
    /**
     * 客户
     * @var Customer
     */
    public $customer;
    
    
    /**
     * 收货地址
     * @var unknown
     */
    public $address;
    
    /**
     * 创建时间
     * @var int
     */
    public $create_time;
    
    /**
     * 订单商品详情
     * @var unknown
     */
    public $detail;
    
    /**
     * 订单促销
     * @var unknown
     */
    public $promotion;
    
}