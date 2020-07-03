<?php

class modMgrNumbersGetlistProcessor extends modObjectGetlistProcessor{
    
    public $classKey = 'crmNumber';
    
    public $defaultSortField = 'id';
    
    public function initialize(){
        
        $this->setDefaultProperties(array(
            "showdeleted"    => true,
        ));
        
        return parent::initialize();
    }
    
    
    public function prepareQueryBeforeCount(xPDOQuery $c){
        $c = parent::prepareQueryBeforeCount($c);
        
        if(!$this->modx->hasPermission('crm_view_numbers')){
            $c->where(array(
                'createdby' => $this->modx->user->id,
                'deleted'   => 0,
            ));
        }
        
        $where = array();
        
        if(!$this->getProperty('showdeleted')){
            $where['deleted'] = 0;
        }
        
        if($search = $this->getProperty('search')){
            $where['number:like'] = "%{$search}%";
        }
        
        if($where){
            $c->where($where);
        }
        
        return $c;
    }
    
    public function prepareRow($object){
        $row = parent::prepareRow($object);
        
        $menu = array();
        
        if($this->modx->hasPermission('crm_edit_number')){
            $menu[] = array(
                'text' => 'Редактировать',
                'handler'   => 'this.editNumber',
            );
        }
        
        if($this->modx->hasPermission('crm_publish_number')){
            switch($row['published']){
                case '1':
                    $menu[] = array(
                        'text' => 'Отменить публикацию',
                        'handler'   => 'this.unpublishNumber',
                    );
                    break;
                default:
                    $menu[] = array(
                        'text' => 'Опубликовать',
                        'handler'   => 'this.publishNumber',
                    );;
            }
        }
        
        if($this->modx->hasPermission('crm_delete_number')){
            switch($row['deleted']){
                case '0':
                    $menu[] = array(
                        'text' => 'Удалить',
                        'handler'   => 'this.deleteNumber',
                    );
                    break;
                default:
                    $menu[] = array(
                        'text' => 'Восстановить',
                        'handler'   => 'this.undeleteNumber',
                    );;
            }
        }
        
        $row['menu'] = $menu;
        
        return $row;
    }
    
}

return 'modMgrNumbersGetlistProcessor';