<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * functions.php
 *
 * Author     : metheno
 * Date       : 2017/02/11
 * Version    :
 * Description:
 */

function themeConfig($form) {


  $enableTransparent = new Typecho_Widget_Helper_Form_Element_Radio('enableTransparent',
    array('0' => _t('开启'),
    '1' => _t('关闭')),
    '1', _t('Safari 毛玻璃特效 (Beta)'), _t('默认为关闭'));
  $form->addInput($enableTransparent);

  $enableTransparentBg = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBg', NULL, NULL,
  _t('毛玻璃特效 背景图'), _t('在这里填入一个图片的 URL 地址。<br/>该设置仅在 <b>Safari 毛玻璃特效</b> <b style="color:red;">开启</b> 时生效，且仅在 Safari 可见。'));
  $form->addInput($enableTransparentBg);

  $enableTransparentBgPosition = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBgPosition', NULL, NULL,
  _t('毛玻璃特效 背景图位置'), _t('为 <code>body</code> 添加一个 <code>bacground-position</code>。例如：<code>right</code>。<br/>该设置仅在 <b>Safari 毛玻璃特效</b> <b style="color:red;">开启</b> 时生效，且仅在 Safari 可见。'));
  $form->addInput($enableTransparentBgPosition);

  /*
  $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点 favicon.ico URL'), _t('在这里填入一个 .ico 图标的 URL 地址。'));
  $form->addInput($faviconUrl);
  */
}
