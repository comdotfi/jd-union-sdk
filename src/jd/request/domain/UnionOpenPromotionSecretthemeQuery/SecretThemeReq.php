<?php
namespace UnionOpenPromotionSecretthemeQuery;
class SecretThemeReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.secret.SecretThemeReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $queryType;
    
    public function setQueryType($queryType){
        $this->params['queryType'] = $queryType;
    }

    public function getQueryType(){
        return $this->queryType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>