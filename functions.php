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

require_once("lib/PluginCheck.php");
require_once("lib/PostRenderer.php");
require_once("lib/UACheck.php");

function themeConfig($form) {

  $enableTransparent = new Typecho_Widget_Helper_Form_Element_Radio('enableTransparent',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('毛玻璃特效 (Beta)'), _t('默认为关闭。<br/>仅支持 Safari 浏览器。'));
  $form->addInput($enableTransparent);

  $enableTransparentBg = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBg', NULL, NULL,
  _t('毛玻璃特效 背景图'), _t('在这里填入一个图片的 URL 地址。<br/>该设置仅在 <b>毛玻璃特效</b> <b style="color:red;">开启</b> 时生效。'));
  $form->addInput($enableTransparentBg);

  $enableTransparentBgPosition = new Typecho_Widget_Helper_Form_Element_Text('enableTransparentBgPosition', NULL, NULL,
  _t('毛玻璃特效 背景图位置'), _t('添加一个 <code>background-position</code>。例如：<code>right</code>。<br/>该设置仅在 <b>毛玻璃特效</b> <b style="color:red;">开启</b> 时生效。'));
  $form->addInput($enableTransparentBgPosition);

  $frostedGlassRGBA = new Typecho_Widget_Helper_Form_Element_Text('frostedGlassRGBA', NULL, NULL,
  _t('backdrop-filter 颜色'), _t('必须使用 <code>rgba()</code>'));
  $form->addInput($frostedGlassRGBA);

  $frostedGlassBlurAmount = new Typecho_Widget_Helper_Form_Element_Text('frostedGlassBlurAmount', NULL, NULL,
  _t('backdrop-filter blur 值'), _t('数值必须为大于 0 的整数。'));
  $form->addInput($frostedGlassBlurAmount);

  $themeColor = new Typecho_Widget_Helper_Form_Element_Text('themeColor', NULL, NULL,
  _t('主题颜色'), _t('设置主题色。对于 Safari，该设置仅在 <b>毛玻璃特效</b> <b style="color:red;">关闭</b> 时生效。<br/>提示：请不要忘记这里其实也能使用 <code>rgba()</code>。'));
  $form->addInput($themeColor);

  $beianNumber = new Typecho_Widget_Helper_Form_Element_Text('beianNumber', NULL, NULL,
  _t('备案号'), _t('如果已经备案，请填写备案号。'));
  $form->addInput($beianNumber);

  $neteaseCommentsProductKey = new Typecho_Widget_Helper_Form_Element_Text('neteaseCommentsProductKey', NULL, NULL,
  _t('网易云跟帖 productKey'), _t('请在跟贴 WEB 代码中获取该 productKey。'));
  $form->addInput($neteaseCommentsProductKey);

  $neteaseCommentsTieLoader = new Typecho_Widget_Helper_Form_Element_Text('neteaseCommentsTieLoader', NULL, NULL,
  _t('网易云跟帖 Tie.loader'), _t('请在跟贴 WEB 代码中获取该 Tie.loader 值。'));
  $form->addInput($neteaseCommentsTieLoader);

  $enableSerifFont = new Typecho_Widget_Helper_Form_Element_Radio('enableSerifFont',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('正文使用衬线字体'), _t('关闭状况下<b>正文</b>字体使用 Roboto、苹方、微软雅黑。开启后使用 Roboto Slab。'));
  $form->addInput($enableSerifFont);

  $enableMathJax = new Typecho_Widget_Helper_Form_Element_Radio('enableMathJax',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('MathJax 支持'), _t('默认为关闭。<br/>单行：<code>$...$</code>；<br/>多行：<code>$$...$$</code>。'));
  $form->addInput($enableMathJax);
  
  $enableCopyrightProtection = new Typecho_Widget_Helper_Form_Element_Radio('enableCopyrightProtection',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('开启版权保护'), _t('添加一个版权保护机制。'));
  $form->addInput($enableCopyrightProtection);

  $dnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('dnsPrefetch',
    array('1' => _t('开启'),
    '0' => _t('关闭')),
    '0', _t('DNS Prefetch'), _t('默认为关闭。<br/>开启后会对 Google Fonts 和 Gravatar 进行预获取。'));
  $form->addInput($dnsPrefetch);

  $dnsPrefetch_Add = new Typecho_Widget_Helper_Form_Element_Text('dnsPrefetch_Add', NULL, NULL,
  _t('添加一条 DNS Prefetch'), _t('填写一个 URL。例如：<code>//ewiuegqiwefweif.qnssl.com</code>。'));
  $form->addInput($dnsPrefetch_Add);

  $analyticsGoogle = new Typecho_Widget_Helper_Form_Element_Textarea('analyticsGoogle', NULL, NULL,
  _t('Google Analytics 代码'), _t('填写你的 Google Analytics 代码。不需要加 <code>script</code> 标签。'));
  $form->addInput($analyticsGoogle);

}
