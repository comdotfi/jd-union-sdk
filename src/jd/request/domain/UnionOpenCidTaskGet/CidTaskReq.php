<?php
namespace UnionOpenCidTaskGet;
class CidTaskReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cid.CidTaskReq";
    }
        
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
            
    private $adownerPin;
    
    public function setAdownerPin($adownerPin){
        $this->params['adownerPin'] = $adownerPin;
    }

    public function getAdownerPin(){
        return $this->adownerPin;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $taskName;
    
    public function setTaskName($taskName){
        $this->params['taskName'] = $taskName;
    }

    public function getTaskName(){
        return $this->taskName;
    }
            
    private $taskDescription;
    
    public function setTaskDescription($taskDescription){
        $this->params['taskDescription'] = $taskDescription;
    }

    public function getTaskDescription(){
        return $this->taskDescription;
    }
            
    private $materialId;
    
    public function setMaterialId($materialId){
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId(){
        return $this->materialId;
    }
            
    private $appLandingUrl;
    
    public function setAppLandingUrl($appLandingUrl){
        $this->params['appLandingUrl'] = $appLandingUrl;
    }

    public function getAppLandingUrl(){
        return $this->appLandingUrl;
    }
            
    private $sceneType;
    
    public function setSceneType($sceneType){
        $this->params['sceneType'] = $sceneType;
    }

    public function getSceneType(){
        return $this->sceneType;
    }
            
    private $traceScope;
    
    public function setTraceScope($traceScope){
        $this->params['traceScope'] = $traceScope;
    }

    public function getTraceScope(){
        return $this->traceScope;
    }
            
    private $traceEventType;
    
    public function setTraceEventType($traceEventType){
        $this->params['traceEventType'] = $traceEventType;
    }

    public function getTraceEventType(){
        return $this->traceEventType;
    }
            
    private $tracePoint;
    
    public function setTracePoint($tracePoint){
        $this->params['tracePoint'] = $tracePoint;
    }

    public function getTracePoint(){
        return $this->tracePoint;
    }
            
    private $tracePeriod;
    
    public function setTracePeriod($tracePeriod){
        $this->params['tracePeriod'] = $tracePeriod;
    }

    public function getTracePeriod(){
        return $this->tracePeriod;
    }
            
    private $traceSpuBlacklist;
    
    public function setTraceSpuBlacklist($traceSpuBlacklist){
        $this->params['traceSpuBlacklist'] = $traceSpuBlacklist;
    }

    public function getTraceSpuBlacklist(){
        return $this->traceSpuBlacklist;
    }
            
    private $traceSkuBlacklist;
    
    public function setTraceSkuBlacklist($traceSkuBlacklist){
        $this->params['traceSkuBlacklist'] = $traceSkuBlacklist;
    }

    public function getTraceSkuBlacklist(){
        return $this->traceSkuBlacklist;
    }
            
    private $traceSpuWhitelist;
    
    public function setTraceSpuWhitelist($traceSpuWhitelist){
        $this->params['traceSpuWhitelist'] = $traceSpuWhitelist;
    }

    public function getTraceSpuWhitelist(){
        return $this->traceSpuWhitelist;
    }
            
    private $traceSkuWhitelist;
    
    public function setTraceSkuWhitelist($traceSkuWhitelist){
        $this->params['traceSkuWhitelist'] = $traceSkuWhitelist;
    }

    public function getTraceSkuWhitelist(){
        return $this->traceSkuWhitelist;
    }
            
    private $traceRepeat;
    
    public function setTraceRepeat($traceRepeat){
        $this->params['traceRepeat'] = $traceRepeat;
    }

    public function getTraceRepeat(){
        return $this->traceRepeat;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $secondTrace;
    
    public function setSecondTrace($secondTrace){
        $this->params['secondTrace'] = $secondTrace;
    }

    public function getSecondTrace(){
        return $this->secondTrace;
    }
            
    private $transmitBackDeduction;
    
    public function setTransmitBackDeduction($transmitBackDeduction){
        $this->params['transmitBackDeduction'] = $transmitBackDeduction;
    }

    public function getTransmitBackDeduction(){
        return $this->transmitBackDeduction;
    }
            
    private $orderFilterThreshold;
    
    public function setOrderFilterThreshold($orderFilterThreshold){
        $this->params['orderFilterThreshold'] = $orderFilterThreshold;
    }

    public function getOrderFilterThreshold(){
        return $this->orderFilterThreshold;
    }
            
    private $transmitDelay;
    
    public function setTransmitDelay($transmitDelay){
        $this->params['transmitDelay'] = $transmitDelay;
    }

    public function getTransmitDelay(){
        return $this->transmitDelay;
    }
            
    private $traceFrequencyControl;
    
    public function setTraceFrequencyControl($traceFrequencyControl){
        $this->params['traceFrequencyControl'] = $traceFrequencyControl;
    }

    public function getTraceFrequencyControl(){
        return $this->traceFrequencyControl;
    }
            
    private $landingPageType;
    
    public function setLandingPageType($landingPageType){
        $this->params['landingPageType'] = $landingPageType;
    }

    public function getLandingPageType(){
        return $this->landingPageType;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>