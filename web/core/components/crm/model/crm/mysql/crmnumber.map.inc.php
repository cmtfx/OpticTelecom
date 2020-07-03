<?php
$xpdo_meta_map['crmNumber']= array (
  'package' => 'crm',
  'version' => '1.1',
  'table' => 'crm_numbers',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'code' => '812',
    'number' => NULL,
    'createdon' => 'CURRENT_TIMESTAMP',
    'createdby' => NULL,
    'editedon' => NULL,
    'editedby' => NULL,
    'published' => '1',
    'pub_date' => NULL,
    'unpub_date' => NULL,
    'publishedon' => NULL,
    'publishedby' => NULL,
    'deleted' => '0',
    'deletedon' => NULL,
    'deletedby' => NULL,
    'cost' => NULL,
    'mask' => NULL,
    'category' => '1',
    'status' => '1',
    'reservation' => '0',
    'reservationon' => NULL,
    'carrier' => NULL,
    'type' => NULL,
    'address' => NULL,
    'user' => NULL,
    'former_user' => NULL,
    'incubator' => '0',
    'incubatoron' => NULL,
  ),
  'fieldMeta' => 
  array (
    'code' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'495\',\'499\',\'812\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '812',
    ),
    'number' => 
    array (
      'dbtype' => 'int',
      'precision' => '7',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'createdon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
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
    'published' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '1',
    ),
    'pub_date' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'unpub_date' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'publishedon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'publishedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
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
    'deletedon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'deletedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'cost' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
      'index' => 'index',
    ),
    'mask' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => true,
    ),
    'category' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '1',
    ),
    'status' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '1',
      'index' => 'index',
    ),
    'reservation' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'reservationon' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
    'carrier' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => true,
    ),
    'type' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'SIP\',\'PBX\'',
      'phptype' => 'string',
      'null' => true,
    ),
    'address' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => true,
    ),
    'user' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'former_user' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
    ),
    'incubator' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'0\',\'1\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '0',
    ),
    'incubatoron' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'number' => 
    array (
      'alias' => 'number',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'number' => 
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
    'cost' => 
    array (
      'alias' => 'cost',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'cost' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
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