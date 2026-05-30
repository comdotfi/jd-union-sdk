<?php
namespace UnionOpenExchangeMediaDtorderSync;
class SyncDtOrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.SyncDtOrderReq";
    }
        
    private $mediaDtOrder;
            
    public function setMediaDtOrder($mediaDtOrder){
        $this->params['mediaDtOrder'] = $mediaDtOrder ->getInstance();
    }
        
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>