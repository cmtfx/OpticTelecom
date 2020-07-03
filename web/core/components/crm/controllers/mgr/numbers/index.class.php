<?php

require_once __DIR__ . '/../index.class.php';

class CrmControllersMgrNumbersIndexManagerController extends CrmControllersMgrIndexManagerController{
    
    public function loadCustomCssJs() {
        parent::loadCustomCssJs();
        
        $assets_url = $this->getOption('assets_url');
        
        
        $this->modx->regClientStartupScript($assets_url.'js/numbers/grid.js'); 
        
        $this->modx->regClientStartupScript('<script type="text/javascript">
            Ext.onReady(function(){
                MODx.add("crm-grid-numbersgrid")
                // MODx.add("crm-grid-grid")
            });
        </script>', true);
        
        return;
    }
    
}