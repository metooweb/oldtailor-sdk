<?php
namespace metooweb\oldtailor\struct;

/**
 * 订单商品
 * @author metooweb
 *
 */
class OrderSku {
    
    /**
     * order_sku_id
     * @var int
     */
    public $id;
    
    /**
     * sku_id
     * @var int
     */
    public $sku_id;
    
    /**
     * spu_id
     * @var int
     */
    public $spu_id;
    
    /**
     * 商品缩略图
     * @var string
     */
    public $thumb;
    
    /**
     * 条形码
     * @var string
     */
    public $barcode;
    
    /**
     * 购买数量
     * @var int
     */
    public $number;
    
    /**
     * 商品价格
     * @var float
     */
    public $price;
    
    /**
     * 真实价格
     * @var float
     */
    public $price_real;
    
    /**
     * 发货
     * @var OrderDelivery
     */
    public $delivery;
    
    /**
     * 促销
     * @var unknown
     */
    public $promotion;
    
    
     
    
}