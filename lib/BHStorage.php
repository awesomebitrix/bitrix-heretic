<?php

// Простое key-value хранилище

class BHStorage extends BHProto {

  private static $instance;

  public static function _() {
    if(isset(self::$instance)) return self::$instance;
    self::$instance = new self();
    return self::$instance;
  }

  private $db;
  private function __construct() {
    global $DB;
    $this->db = $DB;
  }

  public function save($key, $val) {
    $query = "INSERT INTO `b_heretic` (`key`, `value`) VALUES ('".addslashes($key)."', '".addslashes(serialize($val))."') ON DUPLICATE KEY UPDATE `value` = '".addslashes(serialize($val))."'";
    $this->db->Query($query);
  }

  public function get($key) {
    $query = "SELECT * FROM `b_heretic` WHERE `key` = '".addslashes($key)."'";
    $ret = $this->db->Query($query);
    if($ret->SelectedRowsCount() == 0) return null;
    $data = $ret->Fetch();
    return unserialize($data['value']);
  }


  public static function install() {
    global $DB;
    $query = "CREATE TABLE IF NOT EXISTS `b_heretic` (`key` VARCHAR(64) NOT NULL, `value` LONGTEXT NOT NULL, PRIMARY KEY(`key`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $DB->Query($query);
    BHProto::checkInstall('BHStorage');
  }

}