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
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('Safari 毛玻璃特效 (Beta)'), _t('默认为关闭'));
  $form->addInput($enableTransparent);

  $enableTransparentBg = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBg', NULL, NULL,
  _t('毛玻璃特效 背景图'), _t('在这里填入一个图片的 URL 地址。<br/>该设置仅在 <b>Safari 毛玻璃特效</b> <b style="color:red;">开启</b> 时生效，且仅在 Safari 可见。'));
  $form->addInput($enableTransparentBg);

  $enableTransparentBgPosition = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBgPosition', NULL, NULL,
  _t('毛玻璃特效 背景图位置'), _t('为 <code>body</code> 添加一个 <code>background-position</code>。例如：<code>right</code>。<br/>该设置仅在 <b>Safari 毛玻璃特效</b> <b style="color:red;">开启</b> 时生效，且仅在 Safari 可见。'));
  $form->addInput($enableTransparentBgPosition);

  $enableSerifFont = new Typecho_Widget_Helper_Form_Element_Radio('enableSerifFont',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('正文使用衬线字体'), _t('关闭状况下<b>正文</b>字体使用 Roboto、苹方、微软雅黑。开启后使用 Roboto Slab。<br/>该设置对各个标题不生效。'));
  $form->addInput($enableSerifFont);

  $enableMathJax = new Typecho_Widget_Helper_Form_Element_Radio('enableMathJax',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('MathJax 支持'), _t('默认为关闭。<br/>单行：<code>$...$</code>；<br/>多行：<code>$$...$$</code>。'));
  $form->addInput($enableMathJax);

  $dnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('dnsPrefetch',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('DNS Prefetch'), _t('默认为关闭。<br/>开启后会对 Google Fonts 和 Gravatar 进行预获取。'));
  $form->addInput($dnsPrefetch);

  $dnsPrefetch_Add = new Typecho_Widget_Helper_Form_Element_Text('dnsPrefetch_Add', NULL, NULL,
  _t('添加一条 DNS Prefetch'), _t('填写一个 URL。例如：<code>//ewiuegqiwefweif.qnssl.com</code>。'));
  $form->addInput($dnsPrefetch_Add);

  $analyticsGoogle = new Typecho_Widget_Helper_Form_Element_Textarea('analyticsGoogle', NULL, NULL,
  _t('Google Analytics 代码'), _t('填写你的 Google Analytics 代码。不需要加 <code>script</code> 标签'));
  $form->addInput($analyticsGoogle);

  /*
  $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点 favicon.ico URL'), _t('在这里填入一个 .ico 图标的 URL 地址。'));
  $form->addInput($faviconUrl);
  */
}
