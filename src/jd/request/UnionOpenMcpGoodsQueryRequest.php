<?php
class UnionOpenMcpGoodsQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.mcp.goods.query";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return $this->apiParas;
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                                            		                                    	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                   			private $keyword;
    	                        
	public function setKeyword($keyword){
		$this->keyword = $keyword;
         $this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword(){
	  return $this->keyword;
	}

                        	                   			private $userIdType;
    	                        
	public function setUserIdType($userIdType){
		$this->userIdType = $userIdType;
         $this->apiParas["userIdType"] = $userIdType;
	}

	public function getUserIdType(){
	  return $this->userIdType;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $fields;
    	                        
	public function setFields($fields){
		$this->fields = $fields;
         $this->apiParas["fields"] = $fields;
	}

	public function getFields(){
	  return $this->fields;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   	                    		private $shopTypes;
    	                        
	public function setShopTypes($shopTypes){
		$this->shopTypes = $shopTypes;
         $this->apiParas["shopTypes"] = $shopTypes;
	}

	public function getShopTypes(){
	  return $this->shopTypes;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                        	                   			private $sortName;
    	                        
	public function setSortName($sortName){
		$this->sortName = $sortName;
         $this->apiParas["sortName"] = $sortName;
	}

	public function getSortName(){
	  return $this->sortName;
	}

                        	                   			private $exactMatch;
    	                        
	public function setExactMatch($exactMatch){
		$this->exactMatch = $exactMatch;
         $this->apiParas["exactMatch"] = $exactMatch;
	}

	public function getExactMatch(){
	  return $this->exactMatch;
	}

                        	                   			private $pricefrom;
    	                        
	public function setPricefrom($pricefrom){
		$this->pricefrom = $pricefrom;
         $this->apiParas["pricefrom"] = $pricefrom;
	}

	public function getPricefrom(){
	  return $this->pricefrom;
	}

                        	                   			private $priceto;
    	                        
	public function setPriceto($priceto){
		$this->priceto = $priceto;
         $this->apiParas["priceto"] = $priceto;
	}

	public function getPriceto(){
	  return $this->priceto;
	}

                        	                   			private $openId;
    	                        
	public function setOpenId($openId){
		$this->openId = $openId;
         $this->apiParas["openId"] = $openId;
	}

	public function getOpenId(){
	  return $this->openId;
	}

                            }





        
 

