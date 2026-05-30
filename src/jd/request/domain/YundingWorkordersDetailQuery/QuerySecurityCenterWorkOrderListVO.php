<?php
namespace YundingWorkordersDetailQuery;
class QuerySecurityCenterWorkOrderListVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jdcloud.ecop.tripod.openapi.model.securityCenter.QuerySecurityCenterWorkOrderListVO";
    }
        
    private $eventLevel;
    
    public function setEventLevel($eventLevel){
        $this->params['eventLevel'] = $eventLevel;
    }

    public function getEventLevel(){
        return $this->eventLevel;
    }
            
    private $size;
    
    public function setSize($size){
        $this->params['size'] = $size;
    }

    public function getSize(){
        return $this->size;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }
            
    private $eventType;
    
    public function setEventType($eventType){
        $this->params['eventType'] = $eventType;
    }

    public function getEventType(){
        return $this->eventType;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $startDate;
    
    public function setStartDate($startDate){
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate(){
        return $this->startDate;
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