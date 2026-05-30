<?php
namespace UnionOpenPromotionSecretGet;
class SecretReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.secret.SecretReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $secretThemeId;
    
    public function setSecretThemeId($secretThemeId){
        $this->params['secretThemeId'] = $secretThemeId;
    }

    public function getSecretThemeId(){
        return $this->secretThemeId;
    }
            
    private $secretKeyWord;
    
    public function setSecretKeyWord($secretKeyWord){
        $this->params['secretKeyWord'] = $secretKeyWord;
    }

    public function getSecretKeyWord(){
        return $this->secretKeyWord;
    }
            
    private $tu;
    
    public function setTu($tu){
        $this->params['tu'] = $tu;
    }

    public function getTu(){
        return $this->tu;
    }
            
    private $tuName;
    
    public function setTuName($tuName){
        $this->params['tuName'] = $tuName;
    }

    public function getTuName(){
        return $this->tuName;
    }
            
    private $webId;
    
    public function setWebId($webId){
        $this->params['webId'] = $webId;
    }

    public function getWebId(){
        return $this->webId;
    }
            
    private $effectiveStartTime;
    
    public function setEffectiveStartTime($effectiveStartTime){
        $this->params['effectiveStartTime'] = $effectiveStartTime;
    }

    public function getEffectiveStartTime(){
        return $this->effectiveStartTime;
    }
            
    private $effectiveEndTime;
    
    public function setEffectiveEndTime($effectiveEndTime){
        $this->params['effectiveEndTime'] = $effectiveEndTime;
    }

    public function getEffectiveEndTime(){
        return $this->effectiveEndTime;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $promotionType;
    
    public function setPromotionType($promotionType){
        $this->params['promotionType'] = $promotionType;
    }

    public function getPromotionType(){
        return $this->promotionType;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>