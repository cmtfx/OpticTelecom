<?php

class modMgrNumbersUnDeleteProcessor extends modObjectUpdateProcessor{
    
    public $classKey = 'crmNumber';
    
    public function checkPermissions() {
        return $this->modx->hasPermission('crm_undelete_number');
    }
    
    public function initialize(){
        
        return parent::initialize();
    }
    
    public function beforeSave() {
        $this->object->set('editedby', $this->modx->user->get('id'));
        $this->object->set('editedon', time(), 'integer');
        $this->object->set('deleted',0);
        
        # print_r($this->object->toArray());
        # exit;
        
        return parent::beforeSave();
    }
    
}

return 'modMgrNumbersUnDeleteProcessor';