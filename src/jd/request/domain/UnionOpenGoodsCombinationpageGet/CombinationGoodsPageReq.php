<?php
namespace UnionOpenGoodsCombinationpageGet;
class CombinationGoodsPageReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.combination.CombinationGoodsPageReq";
    }
        
    private $skuInfo;
    
    public function setSkuInfo($skuInfo){
        $this->params['skuInfo'] = $skuInfo;
    }

    public function getSkuInfo(){
        return $this->skuInfo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>