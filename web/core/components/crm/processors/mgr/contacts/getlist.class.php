<?php

class modMgrContactsGetlistProcessor extends modObjectGetlistProcessor{
    
    public $classKey = 'crmContact';
    
    public $defaultSortField = 'id';
    
    public function initialize(){
        
        $this->setDefaultProperties(array(
            "showdeleted"    => true,
        ));
        
        return parent::initialize();
    }
    
    
    public function prepareQueryBeforeCount(xPDOQuery $c){
        $c = parent::prepareQueryBeforeCount($c);
        
        $c->innerJoin('modUserProfile', 'createdUserProfile', 'createdUserProfile.internalKey = crmContact.createdby');
        
        $c->select(array(
            "createdUserProfile.fullname as CreatedBy_fullname",
            "{$this->classKey}.*",
        ));
        
        if(!$this->modx->hasPermission('crm_view_comments')){
            $c->select(array(
                "'' as comments",
            ));
        }
        
        
        if(!$this->modx->hasPermission('crm_view_all_contacts')){
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
            $where['name:like'] = "%{$search}%";
        }
        
        if($searchAddress = $this->getProperty('searchAddress')){
            $where['address:like'] = "%{$searchAddress}%";
        }
        
        if($setManager = $this->getProperty('setManager')){
            $where['createdby:like'] = "%{$setManager}%";
        }
        
        $setStatus = $this->getProperty('setStatus');
        if((string)$setStatus !== ""){
            $where['status:like'] = "%{$setStatus}%";
        }
        
        if($searchDate = $this->getProperty('searchDate')){
            $where['next_prev_date:like'] = "%{$searchDate}%";
        }
        
        if($searchFirstDate = $this->getProperty('searchFirstDate')){
            $where['createdon:like'] = "%{$searchFirstDate}%";
        }
        
        if($where){
            $c->where($where);
        }
        
        return $c;
    }
    
    public function prepareRow($object){
        // print '<pre>';
        $row = parent::prepareRow($object);
        
        $menu = array();
        
        if($this->modx->hasPermission('crm_edit_contact')){
            $menu[] = array(
                'text' => 'Редактировать',
                'handler'   => 'this.editContact',
            );
        }
        
        if($this->modx->hasPermission('crm_change_manager')){
            $menu[] = array(
                'text' => 'Сменить менеджера',
                'handler'   => 'this.changeManager',
            );
        }
        
        if($this->modx->hasPermission('crm_delete_contact')){
            switch($row['deleted']){
                case '0':
                    $menu[] = array(
                        'text' => 'Удалить',
                        'handler'   => 'this.deleteContact',
                    );
                    break;
                default:
                    $menu[] = array(
                        'text' => 'Восстановить',
                        'handler'   => 'this.undeleteContact',
                    );;
            }
        }
        
        
        $row['menu'] = $menu;
        
        /*print_R($row);
        
        exit;*/
        return $row;
    }
    
}

return 'modMgrContactsGetlistProcessor';

