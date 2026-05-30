<?php
namespace UnionOpenExchangeMediaTaskQuery;
class TaskInfoQueryReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.TaskInfoQueryReq";
    }
        
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $taskCode;
    
    public function setTaskCode($taskCode){
        $this->params['taskCode'] = $taskCode;
    }

    public function getTaskCode(){
        return $this->taskCode;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>