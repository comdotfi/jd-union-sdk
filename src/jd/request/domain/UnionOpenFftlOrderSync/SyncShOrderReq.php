<?php
namespace UnionOpenFftlOrderSync;
class SyncShOrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cid.SyncShOrderReq";
    }
        
    private $bizType;
    
    public function setBizType($bizType){
        $this->params['bizType'] = $bizType;
    }

    public function getBizType(){
        return $this->bizType;
    }
            
    private $sceneType;
    
    public function setSceneType($sceneType){
        $this->params['sceneType'] = $sceneType;
    }

    public function getSceneType(){
        return $this->sceneType;
    }
            
    private $requestId;
    
    public function setRequestId($requestId){
        $this->params['requestId'] = $requestId;
    }

    public function getRequestId(){
        return $this->requestId;
    }
            
    private $accountId;
    
    public function setAccountId($accountId){
        $this->params['accountId'] = $accountId;
    }

    public function getAccountId(){
        return $this->accountId;
    }
            
    private $eventType;
    
    public function setEventType($eventType){
        $this->params['eventType'] = $eventType;
    }

    public function getEventType(){
        return $this->eventType;
    }
            
    private $eventTime;
    
    public function setEventTime($eventTime){
        $this->params['eventTime'] = $eventTime;
    }

    public function getEventTime(){
        return $this->eventTime;
    }
            
    private $jdEventType;
    
    public function setJdEventType($jdEventType){
        $this->params['jdEventType'] = $jdEventType;
    }

    public function getJdEventType(){
        return $this->jdEventType;
    }
            
    private $jdEventTime;
    
    public function setJdEventTime($jdEventTime){
        $this->params['jdEventTime'] = $jdEventTime;
    }

    public function getJdEventTime(){
        return $this->jdEventTime;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $callback;
    
    public function setCallback($callback){
        $this->params['callback'] = $callback;
    }

    public function getCallback(){
        return $this->callback;
    }
            
    private $payAmount;
    
    public function setPayAmount($payAmount){
        $this->params['payAmount'] = $payAmount;
    }

    public function getPayAmount(){
        return $this->payAmount;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $orderPlatform;
    
    public function setOrderPlatform($orderPlatform){
        $this->params['orderPlatform'] = $orderPlatform;
    }

    public function getOrderPlatform(){
        return $this->orderPlatform;
    }
            
    private $extInfo;
    
    public function setExtInfo($extInfo){
        $this->params['extInfo'] = $extInfo;
    }

    public function getExtInfo(){
        return $this->extInfo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>