<?php
class YundingWorkordersDetailQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunding.workorders.detail.query";
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
    private  $querySecurityCenterWorkOrderListVO;

    public function setQuerySecurityCenterWorkOrderListVO($querySecurityCenterWorkOrderListVO){
        $this->apiParas['querySecurityCenterWorkOrderListVO'] = $querySecurityCenterWorkOrderListVO;
    }
    public function getQuerySecurityCenterWorkOrderListVO(){
        return $this->apiParas['querySecurityCenterWorkOrderListVO'];
    }
}

?>