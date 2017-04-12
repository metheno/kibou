<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
require_once("lib/PluginCheck.php");
require_once("lib/PostRenderer.php");
require_once("lib/UACheck.php");
$this->need('header.php'); ?>

<div class="blog-post">
  <center>
    <h2 class="blog-post-title" itemprop="name headline"><?php _e("Error 404"); ?></h2>
    <p><?php _e("未找到您正在请求的页面"); ?></p>
  </center>
</div>

<style>
  .blog-main {
    padding: 50px;
    border-radius: 9px;
  }
</style>

<?php $this->need('footer.php'); ?>