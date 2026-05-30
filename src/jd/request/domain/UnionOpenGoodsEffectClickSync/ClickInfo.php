<?php
namespace UnionOpenGoodsEffectClickSync;
class ClickInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.effect.ClickInfo";
    }
        
    private $itemId;
    
    public function setItemId($itemId){
        $this->params['itemId'] = $itemId;
    }

    public function getItemId(){
        return $this->itemId;
    }
            
    private $extMap;
    
    public function setExtMap($extMap){
        $this->params['extMap'] = $extMap;
    }

    public function getExtMap(){
        return $this->extMap;
    }
            
    private $pos;
    
    public function setPos($pos){
        $this->params['pos'] = $pos;
    }

    public function getPos(){
        return $this->pos;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $timestamp;
    
    public function setTimestamp($timestamp){
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp(){
        return $this->timestamp;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>