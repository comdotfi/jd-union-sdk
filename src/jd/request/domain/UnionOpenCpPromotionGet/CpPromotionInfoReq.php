<?php
namespace UnionOpenCpPromotionGet;
class CpPromotionInfoReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cp.CpPromotionInfoReq";
    }
        
    private $proType;
    
    public function setProType($proType){
        $this->params['proType'] = $proType;
    }

    public function getProType(){
        return $this->proType;
    }
            
    private $giftCouponKey;
    
    public function setGiftCouponKey($giftCouponKey){
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey(){
        return $this->giftCouponKey;
    }
            
    private $couponUrl;
    
    public function setCouponUrl($couponUrl){
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl(){
        return $this->couponUrl;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $weChatType;
    
    public function setWeChatType($weChatType){
        $this->params['weChatType'] = $weChatType;
    }

    public function getWeChatType(){
        return $this->weChatType;
    }
            
    private $chainType;
    
    public function setChainType($chainType){
        $this->params['chainType'] = $chainType;
    }

    public function getChainType(){
        return $this->chainType;
    }
            
    private $rid;
    
    public function setRid($rid){
        $this->params['rid'] = $rid;
    }

    public function getRid(){
        return $this->rid;
    }
            
    private $command;
    
    public function setCommand($command){
        $this->params['command'] = $command;
    }

    public function getCommand(){
        return $this->command;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
            
    private $itemId;
    
    public function setItemId($itemId){
        $this->params['itemId'] = $itemId;
    }

    public function getItemId(){
        return $this->itemId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>