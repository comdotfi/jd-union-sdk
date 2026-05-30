<?php
namespace UnionOpenMcpGoodsQuery;
class GoodsReqDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.mcp.GoodsReq";
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
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $keyword;
    
    public function setKeyword($keyword){
        $this->params['keyword'] = $keyword;
    }

    public function getKeyword(){
        return $this->keyword;
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
            
    private $fields;
    
    public function setFields($fields){
        $this->params['fields'] = $fields;
    }

    public function getFields(){
        return $this->fields;
    }
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $cid;
    
    public function setCid($cid){
        $this->params['cid'] = $cid;
    }

    public function getCid(){
        return $this->cid;
    }
            
    private $shopTypes;
    
    public function setShopTypes($shopTypes){
        $this->params['shopTypes'] = $shopTypes;
    }

    public function getShopTypes(){
        return $this->shopTypes;
    }
            
    private $sort;
    
    public function setSort($sort){
        $this->params['sort'] = $sort;
    }

    public function getSort(){
        return $this->sort;
    }
            
    private $sortName;
    
    public function setSortName($sortName){
        $this->params['sortName'] = $sortName;
    }

    public function getSortName(){
        return $this->sortName;
    }
            
    private $exactMatch;
    
    public function setExactMatch($exactMatch){
        $this->params['exactMatch'] = $exactMatch;
    }

    public function getExactMatch(){
        return $this->exactMatch;
    }
            
    private $pricefrom;
    
    public function setPricefrom($pricefrom){
        $this->params['pricefrom'] = $pricefrom;
    }

    public function getPricefrom(){
        return $this->pricefrom;
    }
            
    private $priceto;
    
    public function setPriceto($priceto){
        $this->params['priceto'] = $priceto;
    }

    public function getPriceto(){
        return $this->priceto;
    }
            
    private $openId;
    
    public function setOpenId($openId){
        $this->params['openId'] = $openId;
    }

    public function getOpenId(){
        return $this->openId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>