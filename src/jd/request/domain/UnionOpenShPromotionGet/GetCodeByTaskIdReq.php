<?php
namespace UnionOpenShPromotionGet;
class GetCodeByTaskIdReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cid.GetCodeByTaskIdReq";
    }
        
    private $account;
    
    public function setAccount($account){
        $this->params['account'] = $account;
    }

    public function getAccount(){
        return $this->account;
    }
            
    private $materialId;
    
    public function setMaterialId($materialId){
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId(){
        return $this->materialId;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $ext1;
    
    public function setExt1($ext1){
        $this->params['ext1'] = $ext1;
    }

    public function getExt1(){
        return $this->ext1;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $couponUrl;
    
    public function setCouponUrl($couponUrl){
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl(){
        return $this->couponUrl;
    }
            
    private $giftCouponKey;
    
    public function setGiftCouponKey($giftCouponKey){
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey(){
        return $this->giftCouponKey;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $sceneId;
    
    public function setSceneId($sceneId){
        $this->params['sceneId'] = $sceneId;
    }

    public function getSceneId(){
        return $this->sceneId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>