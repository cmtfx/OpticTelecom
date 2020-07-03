<?php
$xpdo_meta_map['crmContact']= array (
  'package' => 'crm',
  'version' => '1.1',
  'table' => 'crm_contacts',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => NULL,
    'createdon' => 'CURRENT_TIMESTAMP',
    'createdby' => NULL,
    'editedon' => NULL,
    'editedby' => NULL,
    'deleted' => '0',
    'deletedby' => NULL,
    'deletedon' => NULL,
    'iocall' => NULL,
    'next_prev_date' => NULL,
    'address' => NULL,
    'address_site' => NULL,
    'contacts' => NULL,
    'status' => '2',
    'conversation' => NULL,
    'comments' => NULL,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'createdon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
    ),
    'createdby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'editedon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'editedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'deleted' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
      'index' => 'index',
    ),
    'deletedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'deletedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'iocall' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\',\'2\',\'3\'',
      'phptype' => 'string',
      'null' => true,
    ),
    'next_prev_date' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'address' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'address_site' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'contacts' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'status' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\',\'2\',\'3\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '2',
      'index' => 'index',
    ),
    'conversation' => 
    array (
      'dbtype' => 'longtext',
      'phptype' => 'string',
      'null' => true,
    ),
    'comments' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'name' => 
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'deleted' => 
    array (
      'alias' => 'deleted',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'deleted' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'status' => 
    array (
      'alias' => 'status',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'status' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
