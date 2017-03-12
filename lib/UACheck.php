<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * Device.php
 * Author     : metheno
 * Date       : 2017/03/12
 * Version    :
 * Description:
 */
class UACheck {

  private static $_userAgent;

  private static function getUserAgent() {
    self::$_userAgent = $_SERVER["HTTP_USER_AGENT"];
    return self::$_userAgent;
  }

  public static function isSafari() {
    if (stripos($_SERVER['HTTP_USER_AGENT'], 'Safari') && !stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
        return true;
    }
  }
}
