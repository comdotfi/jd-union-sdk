<?php
namespace UnionOpenMcpPromotionRedpacketGet;
class RedPacketPromotionCodeReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.mcp.RedPacketPromotionCodeReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $openId;
    
    public function setOpenId($openId){
        $this->params['openId'] = $openId;
    }

    public function getOpenId(){
        return $this->openId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>