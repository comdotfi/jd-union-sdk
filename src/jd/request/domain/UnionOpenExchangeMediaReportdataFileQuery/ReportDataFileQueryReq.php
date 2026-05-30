<?php
namespace UnionOpenExchangeMediaReportdataFileQuery;
class ReportDataFileQueryReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.ReportDataFileQueryReq";
    }
        
    private $ossFileDataType;
    
    public function setOssFileDataType($ossFileDataType){
        $this->params['ossFileDataType'] = $ossFileDataType;
    }

    public function getOssFileDataType(){
        return $this->ossFileDataType;
    }
            
    private $activeDate;
    
    public function setActiveDate($activeDate){
        $this->params['activeDate'] = $activeDate;
    }

    public function getActiveDate(){
        return $this->activeDate;
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