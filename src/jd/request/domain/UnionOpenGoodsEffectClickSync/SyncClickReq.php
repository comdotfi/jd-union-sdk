<?php
namespace UnionOpenGoodsEffectClickSync;
class SyncClickReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.effect.SyncClickReq";
    }
        
    private $clickInfoList;
                                        
    public function setClickInfoList($clickInfoList){
        $size = count($clickInfoList);
        for ($i=0; $i<$size; $i++){
            $clickInfoList [$i] = $clickInfoList [$i] ->getInstance();
        }
        $this->params['clickInfoList'] = $clickInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>