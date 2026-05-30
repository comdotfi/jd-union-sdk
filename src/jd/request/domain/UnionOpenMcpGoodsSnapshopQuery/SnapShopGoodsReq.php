<?php
namespace UnionOpenMcpGoodsSnapshopQuery;
class SnapShopGoodsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.mcp.SnapShopGoodsReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $imageData;
    
    public function setImageData($imageData){
        $this->params['imageData'] = $imageData;
    }

    public function getImageData(){
        return $this->imageData;
    }
            
    private $imageId;
    
    public function setImageId($imageId){
        $this->params['imageId'] = $imageId;
    }

    public function getImageId(){
        return $this->imageId;
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
            
    private $userIdType;
    
    public function setUserIdType($userIdType){
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType(){
        return $this->userIdType;
    }
            
    private $userId;
    
    public function setUserId($userId){
        $this->params['userId'] = $userId;
    }

    public function getUserId(){
        return $this->userId;
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