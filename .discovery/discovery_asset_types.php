<?php
return array (
  'botman/driver-config' => 
  array (
    0 => 
    array (
      'value' => 'stubs/hipchat.php',
      'package' => 'botman/driver-hipchat',
      'packageDir' => 'vendor/botman/driver-hipchat/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    1 => 
    array (
      'value' => 'stubs/web.php',
      'package' => 'botman/driver-web',
      'packageDir' => 'vendor/botman/driver-web/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
  'botman/driver' => 
  array (
    0 => 
    array (
      'value' => 'BotMan\\Drivers\\HipChat\\HipChatDriver',
      'package' => 'botman/driver-hipchat',
      'packageDir' => 'vendor/botman/driver-hipchat/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
    1 => 
    array (
      'value' => 'BotMan\\Drivers\\Web\\WebDriver',
      'package' => 'botman/driver-web',
      'packageDir' => 'vendor/botman/driver-web/',
      'priority' => 0.0,
      'metadata' => 
      array (
      ),
    ),
  ),
);
