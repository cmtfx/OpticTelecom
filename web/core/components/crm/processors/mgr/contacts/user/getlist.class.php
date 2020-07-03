<?php

require_once dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))).'/model/modx/processors/security/user/getlist.class.php';

class modMgrContactsUserGetlistProcessor extends modUserGetListProcessor {
    
    public $permission = 'crm_view_user';
    public $defaultSortField = 'fullname';
    
    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c->leftJoin('modUserProfile','Profile');
        $c->leftJoin('modUserGroupMember','UserGroupMembers');
        $c->leftJoin('modUserGroup', 'UserGroup', 'UserGroupMembers.user_group = UserGroup.id');
        $c->where(array(
                'UserGroup.id' => 7,
            ));
        return $c;
    }
}
return 'modMgrContactsUserGetlistProcessor';