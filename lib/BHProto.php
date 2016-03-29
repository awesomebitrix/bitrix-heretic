<?php

// Абстрактый класс для мини-модулей

abstract class BHProto {

  // должна быть установка
  public abstract static function install();

  // отметка об установке
  public static function checkInstall($module) {
  $data = COption::GetOptionString('main', 'heretic/'.$module, 'N');
    if($data == 'N') {
      COption::SetOptionString('main', 'heretic/'.$module, 'Y');
    }
  }

  // установлен ли модуль?
  public static function isInstall($module) {
    $data = COption::GetOptionString('main', 'heretic/'.$module, 'N');
    return $data == 'Y';
  }

}