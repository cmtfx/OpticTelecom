<?php

class modMgrContactsCreateProcessor extends modObjectCreateProcessor{
    
    public $classKey = 'crmContact';
    
    public function beforeSave() {
        $this->object->set('createdby', $this->modx->user->get('id'));
        return parent::beforeSave();
    }
    
}

return 'modMgrContactsCreateProcessor';