<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

<div class="blog-post">
  <center>
    <h2 class="blog-post-title" itemprop="name headline"><?php _e("页面未找到"); ?></h2>
    <span class="blog-post-meta">
      <?php _e("Error 404"); ?>
    </span>
  </center>
</div>

<style>
  .blog-main {
    padding: 50px;
    border-radius: 9px;
  }
</style>
