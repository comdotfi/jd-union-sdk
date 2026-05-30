<?php
namespace UnionOpenGoodsHotspotQuery;
class HotspotGoodsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.hotspot.HotspotGoodsReq";
    }
        
    private $contentIds;
    
    public function setContentIds($contentIds){
        $this->params['contentIds'] = $contentIds;
    }

    public function getContentIds(){
        return $this->contentIds;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>