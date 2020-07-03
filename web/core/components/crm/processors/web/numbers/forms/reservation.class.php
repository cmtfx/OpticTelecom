<?php

require_once MODX_CORE_PATH . 'components/modxsite/processors/web/forms/feedback.class.php';

class modWebNumbersFormsReservationProcessor extends modWebFormsFeedbackProcessor {
    
    protected $manager_message_tpl = "message/forms/reservation.tpl";
    
    protected $use_captcha  = false;             // modCaptcha Extra required. http://modx.com/extras/package/modcaptcha
    
    public function initialize(){
        
        $this->manager_group_ids = array(1,4);
        
        return parent::initialize();
    }
    
    /*
        Example: 
        $fields = array(
            'email' => array(
                'required' => true,
                'error_message' => 'Fill email',     
            ),
        );
    */
    
    
    
    
    protected function getFields(){
        $fields = array_merge(
            parent::getFields(), array(
                'nid' => array(
                    'required' => true,
                    'error_message' => 'Не указан ID номера',     
                ),
                'number' => array(
                    'required' => true,
                    'error_message' => 'Не указан номер телефона',
                ),
                'email' => array(
                    'required' => true,
                    'error_message' => 'Укажите e-mail',     
                ),
                'fullname' => array(
                    'required' => true,
                    'error_message' => 'Укажите имя',     
                ), 
                'message' => array(
                    'required' => false,
                    'error_message' => 'Заполните сообщение',     
                ), 
                'phone' => array(
                    'required' => true,
                    'error_message' => 'Укажите номер телефона',
                ),
            )
        );
        return $fields;
    }
    
    
    
    protected function validateFields(){
        
        if(
            $nid = (int)$this->getProperty('nid')
            AND !$this->modx->getCount('crmNumber', $nid)
        ){
            $this->addFieldError('nid', "Не был получен указанный номер");
        }
        
        
        return parent::validateFields();
    }
    
}


return 'modWebNumbersFormsReservationProcessor';