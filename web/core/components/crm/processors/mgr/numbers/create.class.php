<?php

class modMgrNumbersCreateProcessor extends modObjectCreateProcessor{
    
    public $classKey = 'crmNumber';
    
    public function beforeSave() {
        $this->object->set('createdby', $this->modx->user->get('id'));
        return parent::beforeSave();
    }
    
}

return 'modMgrNumbersCreateProcessor';