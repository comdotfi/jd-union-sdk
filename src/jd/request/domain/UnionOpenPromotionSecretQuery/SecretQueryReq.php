<?php
namespace UnionOpenPromotionSecretQuery;
class SecretQueryReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.secret.SecretQueryReq";
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
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
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
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
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