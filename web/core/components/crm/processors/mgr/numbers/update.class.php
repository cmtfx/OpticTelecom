<?php

class modMgrNumbersUpdateProcessor extends modObjectUpdateProcessor{
    
    public $classKey = 'crmNumber';
    
    public function initialize(){
        if($this->getProperty('carrier')){
        $this->setProperty('carrier',strip_tags($this->getProperty('carrier'),'<b><i><u><font><span>'));
        }
        
        if($this->getProperty('address')){
        $this->setProperty('address',strip_tags($this->getProperty('address'),'<b><i><u><font><span>'));
        }
        
        return parent::initialize();
    }
    
    public function beforeSave() {
        $this->object->set('editedby', $this->modx->user->get('id'));
        $this->object->set('editedon', time(), 'integer');
        
        # print_r($this->object->toArray());
        # exit;
        
        return parent::beforeSave();
    }
}

return 'modMgrNumbersUpdateProcessor';