<?php

require_once __DIR__ . '/update.class.php';

class modMgrContactsUpdatefromgridProcessor extends modMgrContactsUpdateProcessor{
     
    public function initialize(){
        
        if($data = $this->modx->fromJSON($this->getProperty('data'))){
            $this->setDefaultProperties($data);
            unset($this->properties['data']);
        }
        
        # $this->setProperty('id', (int)$this->getProperty('order_id'));
        return parent::initialize();
    }
    
    # public function cleanup() {
    #     
    #     # $processor = new ShopOrdersGetlistProcessor($this->modx, array(
    #     #     'grid' => 0,
    #     #     'order_id'  => $this->getProperty('id'),
    #     # ));
    #     
    #     if(!$response = $processor->run() OR $response->isError() OR !$object = $response->getObject()){
    #         $object = $this->object->toArray();
    #     }
    #     
    #     //return '{"total":"1","results":'.$this->modx->toJSON($object).'}';
    #     return $this->success('', $object);
    # }
    
}

return 'modMgrContactsUpdatefromgridProcessor';

