<?php

require_once MODX_CORE_PATH . 'components/modxsite/processors/site/web/getdata.class.php';

class modWebNumbersGetlistProcessor extends modSiteWebGetdataProcessor {
    
    public $classKey = 'crmNumber';
    
    public function initialize(){
        
        $this->setDefaultProperties(array(  
            'sort'              => "{$this->classKey}.number",
            'dir'               => 'ASC',
        ));
        
        return parent::initialize();
    }
    
    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c = parent::prepareQueryBeforeCount($c);
        
        # $category = $this->modx->resource->getTVValue('category-numbers');
        
        $where = array(
            # 'status' => 1,
            'published' => 1,
            'deleted' => 0,
            'incubator' => 0,
            # 'cost' => $category,
        );
        
        if($category_numbers = (int)$this->getProperty('category_numbers')){
            $where['cost'] = $category_numbers;
        }
        
        if($start_number = (int)$this->getProperty('start_number')){
            $where['number:like'] = "{$start_number}%";
        }
        
        $c->where($where);
        
        return $c;
    }
    
}

return 'modWebNumbersGetlistProcessor';