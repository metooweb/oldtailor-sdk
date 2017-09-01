<?php
namespace metooweb\oldtailor\sku;

use metooweb\oldtailor\Request;
use metooweb\oldtailor\struct\Sku;

/**
 * 
 * @author metooweb
 * @method Sku format() public 数据格式化
 * 
 */
class Lists extends Request{
    
    protected $method = "goods_sku_list";
    
    protected $rules = [
        "spu_id"  => "number",
        "field"   => "require"
    ];
    
    public function setSpuId(int $spu_id){
        
        $this->param('spu_id', $spu_id);
        
        return $this;
    }
    
    /**
     * 关键词
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword){
        
        $this->param('keyword', $keyword);
        
        return $this;
    }
    
    /**
     * 品牌
     * @param int $brand_id
     * @return $this
     */
    public function setBrand(int $brand_id){
        
        $this->param('brand_id', $brand_id);
        
        return $this;
    }
    
    /**
     * 商品分类
     * @param int $category_id
     * @return $this
     */
    public function setCategory(int $category_id){
        
        $this->param('category_id', $category_id);
        
        return $this;
    }
    
    /**
     * 商品状态
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status){
        
        $this->param('status', $status);
        
        return $this;
    }
    /**
     * 商品类型 ：1:普通商品，2:充值商品
     * @param int $type
     * @return $this
     */
    public function setType(int $type){
        
        $this->param('type', $type);
        
        return $this;
    }
    
    
    /**
     * 获取数量
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit){
        
        $this->param('limit', $limit);
        
        return $this;
    }
    
    /**
     * 分页
     * @param int $page
     * @return $this
     */
    public function setPage(int $page){
        
        $this->param('page', $page);
        
        return $this;
    }
    
    /**
     * 分页
     * @param int $page
     * @return $this
     */
    public function setSort(string $sort){
        
        $this->param('sort', $sort);
        
        return $this;
    }
    
    
}