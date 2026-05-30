<?php
class JosSecretApiReportGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.secret.api.report.get";
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
    private  $dataCollectRequestMessage;

    public function setDataCollectRequestMessage($dataCollectRequestMessage){
        $this->apiParas['dataCollectRequestMessage'] = $dataCollectRequestMessage;
    }
    public function getDataCollectRequestMessage(){
        return $this->apiParas['dataCollectRequestMessage'];
    }
}

?>