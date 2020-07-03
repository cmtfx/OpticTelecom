<?php

require_once __DIR__ . '/update.class.php';

class modMgrNumbersUpdatefromgridProcessor extends modMgrNumbersUpdateProcessor{
     
    public function initialize(){
        
        if($data = $this->modx->fromJSON($this->getProperty('data'))){
            $this->setDefaultProperties($data);
            unset($this->properties['data']);
        }
        
        # $this->setProperty('address',strip_tags($this->getProperty('address'),'<b><i><u><font><span>'));
        return parent::initialize();
    }
}

return 'modMgrNumbersUpdatefromgridProcessor';