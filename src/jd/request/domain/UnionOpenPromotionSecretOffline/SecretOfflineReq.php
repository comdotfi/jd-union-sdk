<?php
namespace UnionOpenPromotionSecretOffline;
class SecretOfflineReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.secret.SecretOfflineReq";
    }
        
    private $secretIds;
    
    public function setSecretIds($secretIds){
        $this->params['secretIds'] = $secretIds;
    }

    public function getSecretIds(){
        return $this->secretIds;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>