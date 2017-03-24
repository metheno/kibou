<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <article itemscope="" itemtype="http://schema.org/BlogPosting">
    <div class="blog-post">
      <h2 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h2>
      <p class="blog-post-meta">
        <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;•
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>&nbsp;•
        <?php if (PluginCheck::tePostViewsExists() == true): _e('阅读: '); $this->viewsNum(); ?>&nbsp;•<?php endif; ?>
        <?php $this->category(', '); ?>
      </p>

      <?php // echo PostRenderer::parse($this->content); ?>
      <?php $this->content(); ?>

    </div>
    <p itemprop="keywords" class="post-tag-holder" style="padding-top:10px;"><?php _e('标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></p>
  </article><!-- /.blog-post -->

  <ul class="article-switch">
    <li class="prev"><?php $this->thePrev('%s','<span>没有更多了</span>'); ?></li>
    <li class="next"><?php $this->theNext('%s','<span>没有更多了</span>'); ?></li>
  </ul>

  <?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
