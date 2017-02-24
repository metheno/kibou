<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <article itemscope="" itemtype="http://schema.org/BlogPosting">
    <div class="blog-post">
      <h2 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h2>
      <p class="blog-post-meta">
        <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;•
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>
      </p>

      <?php $this->content(); ?>

    </div>
  </article><!-- /.blog-post -->

  <?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
