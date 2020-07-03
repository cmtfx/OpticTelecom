<?php

/*
    Базовый контроллер
*/

class CrmControllersMgrIndexManagerController extends modExtraManagerController{
    
    function __construct(modX &$modx, $config = array()) {
        parent::__construct($modx, $config);
        $namespace = "crm";
        $this->config['namespace_assets_path'] = $modx->call('modNamespace','translatePath',array(&$modx, $this->config['namespace_assets_path']));
        $this->config['manager_url'] = 
        $this->config['assets'] = 
        $this->config['assets_url'] = 
        $modx->getOption("{$namespace}.manager_url", null, $modx->getOption('manager_url')."components/{$namespace}/");
        $this->config['connectors_url'] = $this->config['manager_url'].'connectors/';
        $this->config['connector_url'] = $this->config['connectors_url'].'connector.php';
    }
    
    
    public function getOption($key, $options = null, $default = null, $skipEmpty = false){
        $options = array_merge($this->config, (array)$options);
        return $this->modx->getOption($key, $options, $default, $skipEmpty);
    }
    
    

    function loadCustomCssJs(){
        parent::loadCustomCssJs();
        
        $attrs = $this->modx->user->getAttributes(array(),'', true);
        $policies = array();
        if(!empty($attrs['modAccessContext']['mgr'])){
            foreach($attrs['modAccessContext']['mgr'] as $attr){
                foreach($attr['policy'] as $policy => $value){
                    if(empty($policies[$policy])){
                        $policies[$policy] = $value;
                    }
                }
            }
        }
        
        $this->addJavascript($this->getOption('assets_url').'js/crm.js'); 
        
        $this->addHtml('<script type="text/javascript">
            Crm.config = '. $this->modx->toJSON($this->config).';
        </script>');
        
        $this->modx->regClientStartupScript('<script type="text/javascript">
            Crm.policies = '. $this->modx->toJSON($policies).';
        </script>', true);
        
        /*
        
        
        
        */
        
        return;
    }
}
