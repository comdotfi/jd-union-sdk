<?php
class UnionOpenPromotionSecretOfflineRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.promotion.secret.offline";
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
    private  $secretOfflineReq;

    public function setSecretOfflineReq($secretOfflineReq){
        $this->apiParas['secretOfflineReq'] = $secretOfflineReq;
    }
    public function getSecretOfflineReq(){
        return $this->apiParas['secretOfflineReq'];
    }
}

?>