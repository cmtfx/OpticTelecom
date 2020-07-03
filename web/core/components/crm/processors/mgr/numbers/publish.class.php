<?php

class modMgrNumbersPublishProcessor extends modObjectUpdateProcessor{
    
    public $classKey = 'crmNumber';
    
    public function checkPermissions() {
        return $this->modx->hasPermission('crm_publish_number');
    }
    
    public function initialize(){
        
        return parent::initialize();
    }
    
    public function beforeSave() {
        $this->object->set('editedby', $this->modx->user->get('id'));
        $this->object->set('editedon', time(), 'integer');
        $this->object->set('published',1);
        $this->object->set('pub_date',false);
        $this->object->set('unpub_date',false);
        $this->object->set('publishedby', $this->modx->user->get('id'));
        $this->object->set('publishedon', time(), 'integer');
        
        # print_r($this->object->toArray());
        # exit;
        
        return parent::beforeSave();
    }
    
}

return 'modMgrNumbersPublishProcessor';