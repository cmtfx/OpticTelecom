<?php

require_once __DIR__ . '/../index.class.php';

class CrmControllersMgrIoIndexManagerController extends CrmControllersMgrIndexManagerController{
    
    public function loadCustomCssJs() {
        parent::loadCustomCssJs();
        
        $assets_url = $this->getOption('assets_url');
        
        
        $this->modx->regClientStartupScript($assets_url.'js/contacts/grid.js'); 
        
        $this->modx->regClientStartupScript('<script type="text/javascript">
            Ext.onReady(function(){
                MODx.add("crm-grid-contactsgrid")
                // MODx.add("crm-grid-grid")
            });
        </script>', true); 
        
        /*
        print '<pre>';
        
        print $assets_url;
        
        print_r($this->config);
        exit;
        */
        
        return;
    }
    
}
