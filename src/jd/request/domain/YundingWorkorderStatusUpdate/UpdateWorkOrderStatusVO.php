<?php
namespace YundingWorkorderStatusUpdate;
class UpdateWorkOrderStatusVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jdcloud.ecop.tripod.openapi.model.securityCenter.UpdateWorkOrderStatusVO";
    }
        
    private $repairedTime;
    
    public function setRepairedTime($repairedTime){
        $this->params['repairedTime'] = $repairedTime;
    }

    public function getRepairedTime(){
        return $this->repairedTime;
    }
            
    private $jobId;
    
    public function setJobId($jobId){
        $this->params['jobId'] = $jobId;
    }

    public function getJobId(){
        return $this->jobId;
    }
            
    private $message;
    
    public function setMessage($message){
        $this->params['message'] = $message;
    }

    public function getMessage(){
        return $this->message;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>