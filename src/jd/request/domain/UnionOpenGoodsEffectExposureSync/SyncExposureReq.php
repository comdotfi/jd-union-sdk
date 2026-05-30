<?php
namespace UnionOpenGoodsEffectExposureSync;
class SyncExposureReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.effect.SyncExposureReq";
    }
        
    private $exposureInfoList;
                                        
    public function setExposureInfoList($exposureInfoList){
        $size = count($exposureInfoList);
        for ($i=0; $i<$size; $i++){
            $exposureInfoList [$i] = $exposureInfoList [$i] ->getInstance();
        }
        $this->params['exposureInfoList'] = $exposureInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>