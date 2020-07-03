<?php

/*
    Помечаем на удаление
*/

class modMgrNumbersDeleteProcessor extends modObjectSoftRemoveProcessor{
    
    public $classKey = 'crmNumber';
    
    public function checkPermissions() {
        return $this->modx->hasPermission('crm_delete_number');
    }
    
}

return 'modMgrNumbersDeleteProcessor';