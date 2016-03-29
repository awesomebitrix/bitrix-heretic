<?php

// Фабрика

class BHFactory {


  public function install($className) {
    call_user_func(array($className, 'install'));
  }


}