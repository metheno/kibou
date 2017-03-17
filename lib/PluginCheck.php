<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * PluginCheck.php
 * Author     : metheno
 * Date       : 2017/03/12
 * Version    :
 * Description:
 */
class PluginCheck {

  private static function getPluginList() {
    $plugins = Typecho_Plugin::export();
    $plugins = $plugins['activated'];
    return $plugins;
  }

  public static function aPlayerExists() {
    if (is_array(self::getPluginList()) && array_key_exists('APlayer', self::getPluginList())) {
      return true;
    }
  }

  public static function dPlayerExists() {
    if (is_array(self::getPluginList()) && array_key_exists('DPlayer', self::getPluginList())) {
      return true;
    }
  }

}
