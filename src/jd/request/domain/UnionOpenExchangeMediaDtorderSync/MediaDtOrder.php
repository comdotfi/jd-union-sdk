<?php
namespace UnionOpenExchangeMediaDtorderSync;
class MediaDtOrder{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.MediaDtOrder";
    }
        
    private $bvId;
    
    public function setBvId($bvId){
        $this->params['bvId'] = $bvId;
    }

    public function getBvId(){
        return $this->bvId;
    }
            
    private $promotionPurposeType;
    
    public function setPromotionPurposeType($promotionPurposeType){
        $this->params['promotionPurposeType'] = $promotionPurposeType;
    }

    public function getPromotionPurposeType(){
        return $this->promotionPurposeType;
    }
            
    private $creativeName;
    
    public function setCreativeName($creativeName){
        $this->params['creativeName'] = $creativeName;
    }

    public function getCreativeName(){
        return $this->creativeName;
    }
            
    private $unitName;
    
    public function setUnitName($unitName){
        $this->params['unitName'] = $unitName;
    }

    public function getUnitName(){
        return $this->unitName;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $authorFansNum;
    
    public function setAuthorFansNum($authorFansNum){
        $this->params['authorFansNum'] = $authorFansNum;
    }

    public function getAuthorFansNum(){
        return $this->authorFansNum;
    }
            
    private $authorId;
    
    public function setAuthorId($authorId){
        $this->params['authorId'] = $authorId;
    }

    public function getAuthorId(){
        return $this->authorId;
    }
            
    private $creativeId;
    
    public function setCreativeId($creativeId){
        $this->params['creativeId'] = $creativeId;
    }

    public function getCreativeId(){
        return $this->creativeId;
    }
            
    private $accountId;
    
    public function setAccountId($accountId){
        $this->params['accountId'] = $accountId;
    }

    public function getAccountId(){
        return $this->accountId;
    }
            
    private $authorName;
    
    public function setAuthorName($authorName){
        $this->params['authorName'] = $authorName;
    }

    public function getAuthorName(){
        return $this->authorName;
    }
            
    private $unitId;
    
    public function setUnitId($unitId){
        $this->params['unitId'] = $unitId;
    }

    public function getUnitId(){
        return $this->unitId;
    }
            
    private $campaignName;
    
    public function setCampaignName($campaignName){
        $this->params['campaignName'] = $campaignName;
    }

    public function getCampaignName(){
        return $this->campaignName;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $promotionPurposeText;
    
    public function setPromotionPurposeText($promotionPurposeText){
        $this->params['promotionPurposeText'] = $promotionPurposeText;
    }

    public function getPromotionPurposeText(){
        return $this->promotionPurposeText;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>