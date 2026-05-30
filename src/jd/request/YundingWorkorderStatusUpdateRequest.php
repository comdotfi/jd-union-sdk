<?php
class YundingWorkorderStatusUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunding.workorder.status.update";
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
    private  $updateWorkOrderStatusVO;

    public function setUpdateWorkOrderStatusVO($updateWorkOrderStatusVO){
        $this->apiParas['updateWorkOrderStatusVO'] = $updateWorkOrderStatusVO;
    }
    public function getUpdateWorkOrderStatusVO(){
        return $this->apiParas['updateWorkOrderStatusVO'];
    }
}

?>