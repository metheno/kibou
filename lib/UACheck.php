<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * UACheck.php
 * Author     : metheno
 * Date       : 2017/03/12
 * Version    :
 * Description:
 */
class UACheck {

  private static $_userAgent;

  private static function getUserAgent() {
    self::$_userAgent = $_SERVER['HTTP_USER_AGENT'];
    return self::$_userAgent;

  }

  public static function isSafari() {
    if (strpos(self::getUserAgent(), 'Safari') && !strpos(self::getUserAgent(), 'Chrome')) {
      return true;
    } else {
      return false;
    }
  }

  public static function isMobile() {
    if (stripos(self::getUserAgent(), 'Mobile')) {
      return true;
    } else {
      return false;
    }
  }

  public static function isMacOsX() {
    if (stripos(self::getUserAgent(), 'Macintosh; Intel Mac OS X')) {
      return true;
    } else {
      return false;
    }
  }
  
  public static function isIOS() {
    if (strpos(self::getUserAgent(), 'iPhone OS') && !strpos(self::getUserAgent(), 'iPad')) {
      return true;
    } else {
      return false;
    }
  }

  public static function isWindows() {
    if (stripos(self::getUserAgent(), 'Windows NT')) {
      return true;
    } else {
      return false;
    }
  }

  public static function isMSIE() {
    if (stripos(self::getUserAgent(), 'MSIE')) {
      return true;
    } else {
      return false;
    }
  }

  public static function isEdge() {
    if (stripos(self::getUserAgent(), 'Edge')) {
      return true;
    } else {
      return false;
    }
  }
}
