<?php
namespace metooweb\oldtailor\struct;

class OrderDelivery {
    
    
    /**
     * 快递单号
     * @var string
     */
    public $sn;
    
    /**
     * 快递名称
     * @var string
     */
    public $name;
    
    /**
     * 创建时间
     * @var int
     */
    public $time;
    
    
    /**
     * 订单号
     * @var string
     */
    public $order_sn;
    
    
    /**
     * 发货价格
     * @var float
     */
    public $price;
    
    /**
     * 快递单图片
     * @var string
     */
    public $image;
    
    /**
     * 门店
     * @var 
     */
    public $store;
    
}
