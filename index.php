<?php

// Bitrix Heretic

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


CModule::AddAutoloadClasses('',
  array(
    'BHProto' => '/bitrix/php_interface/bitrix-heretic/lib/BHProto.php',
    'BHStorage' => '/bitrix/php_interface/bitrix-heretic/lib/BHStorage.php',
    'BHFactory' => '/bitrix/php_interface/bitrix-heretic/lib/BHFactory.php',
    'BHUser' => '/bitrix/php_interface/bitrix-heretic/lib/BHUser.php',
    )
);

