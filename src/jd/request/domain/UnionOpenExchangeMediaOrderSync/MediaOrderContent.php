<?php
namespace UnionOpenExchangeMediaOrderSync;
class MediaOrderContent{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.MediaOrderContent";
    }
        
    private $authorPrice;
    
    public function setAuthorPrice($authorPrice){
        $this->params['authorPrice'] = $authorPrice;
    }

    public function getAuthorPrice(){
        return $this->authorPrice;
    }
            
    private $authorName;
    
    public function setAuthorName($authorName){
        $this->params['authorName'] = $authorName;
    }

    public function getAuthorName(){
        return $this->authorName;
    }
            
    private $authorFansNum;
    
    public function setAuthorFansNum($authorFansNum){
        $this->params['authorFansNum'] = $authorFansNum;
    }

    public function getAuthorFansNum(){
        return $this->authorFansNum;
    }
            
    private $pubTime;
    
    public function setPubTime($pubTime){
        $this->params['pubTime'] = $pubTime;
    }

    public function getPubTime(){
        return $this->pubTime;
    }
            
    private $contentId;
    
    public function setContentId($contentId){
        $this->params['contentId'] = $contentId;
    }

    public function getContentId(){
        return $this->contentId;
    }
            
    private $authorId;
    
    public function setAuthorId($authorId){
        $this->params['authorId'] = $authorId;
    }

    public function getAuthorId(){
        return $this->authorId;
    }
            
    private $authorReferencePrice;
    
    public function setAuthorReferencePrice($authorReferencePrice){
        $this->params['authorReferencePrice'] = $authorReferencePrice;
    }

    public function getAuthorReferencePrice(){
        return $this->authorReferencePrice;
    }
            
    private $pubLink;
    
    public function setPubLink($pubLink){
        $this->params['pubLink'] = $pubLink;
    }

    public function getPubLink(){
        return $this->pubLink;
    }
            
    private $contentName;
    
    public function setContentName($contentName){
        $this->params['contentName'] = $contentName;
    }

    public function getContentName(){
        return $this->contentName;
    }
            
    private $oldContentId;
    
    public function setOldContentId($oldContentId){
        $this->params['oldContentId'] = $oldContentId;
    }

    public function getOldContentId(){
        return $this->oldContentId;
    }
            
    private $listingPrice;
    
    public function setListingPrice($listingPrice){
        $this->params['listingPrice'] = $listingPrice;
    }

    public function getListingPrice(){
        return $this->listingPrice;
    }
            
    private $serviceFee;
    
    public function setServiceFee($serviceFee){
        $this->params['serviceFee'] = $serviceFee;
    }

    public function getServiceFee(){
        return $this->serviceFee;
    }
            
    private $balancePrice;
    
    public function setBalancePrice($balancePrice){
        $this->params['balancePrice'] = $balancePrice;
    }

    public function getBalancePrice(){
        return $this->balancePrice;
    }
            
    private $orderTotalPrice;
    
    public function setOrderTotalPrice($orderTotalPrice){
        $this->params['orderTotalPrice'] = $orderTotalPrice;
    }

    public function getOrderTotalPrice(){
        return $this->orderTotalPrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>