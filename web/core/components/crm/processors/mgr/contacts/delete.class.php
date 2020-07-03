<?php

/*
    Помечаем на удаление
*/

class modMgrContactsDeleteProcessor extends modObjectSoftRemoveProcessor{
    
    public $classKey = 'crmContact';
    
    public function checkPermissions() {
        return $this->modx->hasPermission('crm_delete_contact');
    }
    
}

return 'modMgrContactsDeleteProcessor';