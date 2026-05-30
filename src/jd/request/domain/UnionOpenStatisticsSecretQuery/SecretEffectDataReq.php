<?php
namespace UnionOpenStatisticsSecretQuery;
class SecretEffectDataReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.secret.SecretEffectDataReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $secretId;
    
    public function setSecretId($secretId){
        $this->params['secretId'] = $secretId;
    }

    public function getSecretId(){
        return $this->secretId;
    }
            
    private $startDate;
    
    public function setStartDate($startDate){
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate(){
        return $this->startDate;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
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
            
    private $applyStartTime;
    
    public function setApplyStartTime($applyStartTime){
        $this->params['applyStartTime'] = $applyStartTime;
    }

    public function getApplyStartTime(){
        return $this->applyStartTime;
    }
            
    private $applyEndTime;
    
    public function setApplyEndTime($applyEndTime){
        $this->params['applyEndTime'] = $applyEndTime;
    }

    public function getApplyEndTime(){
        return $this->applyEndTime;
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