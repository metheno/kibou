<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

<div class="blog-post">
  <center>
    <h2 class="blog-post-title" itemprop="name headline"><?php _e("Error 404"); ?></h2>
    <p><?php _e("未找到您正在请求的页面"); ?></p>
    <form id="search" method="post" action="./" role="search">
      <input type="text" class="text" name="s" placeholder="<?php _e("搜索"); ?>">
    </form>
  </center>
</div>

<style>
  .blog-main {
    padding: 50px;
    border-radius: 9px;
  }
</style>
