<?php
namespace UnionOpenCidOrderSync;
class SyncCidOrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cid.SyncCidOrderReq";
    }
        
    private $sceneType;
    
    public function setSceneType($sceneType){
        $this->params['sceneType'] = $sceneType;
    }

    public function getSceneType(){
        return $this->sceneType;
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
            
    private $requestId;
    
    public function setRequestId($requestId){
        $this->params['requestId'] = $requestId;
    }

    public function getRequestId(){
        return $this->requestId;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $cosPrice;
    
    public function setCosPrice($cosPrice){
        $this->params['cosPrice'] = $cosPrice;
    }

    public function getCosPrice(){
        return $this->cosPrice;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>