<?php

class modMgrContactsUpdateProcessor extends modObjectUpdateProcessor{
    
    public $classKey = 'crmContact';
    
    
    public function initialize(){
        if(!$this->modx->hasPermission('crm_change_manager')){
            $this->unsetProperty('createdby');
        }
        
        if($this->getProperty('address')){
        $this->setProperty('address',strip_tags($this->getProperty('address'),'<b><i><u><font><span>'));
        }
        
        if($this->getProperty('contacts')){
        $this->setProperty('contacts',strip_tags($this->getProperty('contacts'),'<b><i><u><font><span>'));
        }
        
        if($this->getProperty('conversation')){
        $this->setProperty('conversation',strip_tags($this->getProperty('conversation'),'<b><i><u><font><span>'));
        }
        
        # $this->modx->log(1, print_r($this->getProperties(), 1));
        
        return parent::initialize();
    }
    
    public function beforeSave() {
        #  Это в beforeSet()
        # $this->setProperties(array(
        #     "createdby" => $this->object->get('createdby'),
        # ));
        
        $this->object->set('editedby', $this->modx->user->get('id'));
        $this->object->set('editedon', time(), 'integer');
        return parent::beforeSave();
    }
}

return 'modMgrContactsUpdateProcessor';