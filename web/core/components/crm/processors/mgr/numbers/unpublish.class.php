<?php

class modMgrNumbersUnPublishProcessor extends modObjectUpdateProcessor{
    
    public $classKey = 'crmNumber';
    
    public function checkPermissions() {
        return $this->modx->hasPermission('crm_unpublish_number');
    }
    
    public function initialize(){
        
        return parent::initialize();
    }
    
    public function beforeSave() {
        $this->object->set('editedby', $this->modx->user->get('id'));
        $this->object->set('editedon', time(), 'integer');
        $this->object->set('published',0);
        
        # print_r($this->object->toArray());
        # exit;
        
        return parent::beforeSave();
    }
    
}

return 'modMgrNumbersUnPublishProcessor';