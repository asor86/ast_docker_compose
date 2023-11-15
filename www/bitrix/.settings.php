<?php
return array (
  'session' => 
  array (
    'value' => 
    array (
      'mode' => 'default',
    ),
    'readonly' => true,
  ),
  'utf_mode' => 
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => 
      array (
        'settings' => 
        array (
          'file' => 'bitrix/modules/error.log',
          'log_size' => 1000000,
        ),
      ),
    ),
    'readonly' => false,
  ),
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
        'host' => 'db',
        'database' => 'bitrix',
        'login' => 'bitrix',
        'password' => '123',
        'options' => 2,
      ),
//        array (
//            'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
//            'host' => 'localhost',
//            'database' => 'sitemanager',
//            'login' => 'bitrix0',
//            'password' => '6eiJ{29?4weAGedk[1DN',
//            'options' => 2,
//        ),
    ),
    'readonly' => true,
  ),
);
