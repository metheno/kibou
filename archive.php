<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <?php if ($this->have()): ?>

    <?php while($this->next()): ?>
      <article itemscope="" itemtype="http://schema.org/BlogPosting">
        <div class="blog-post">
          <h2 class="blog-post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
          <p class="blog-post-meta">
            <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;•
            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time>&nbsp;•
            <?php $this->category(', '); ?>
          </p>

          <?php $this->content(); ?>

          <center class="center-more"><a href="<?php $this->permalink() ?>" class="btn read-more"><?php _e('阅读更多'); ?></a></center>
        </div>
      </article><!-- /.blog-post -->
    <?php endwhile; ?>

  <?php else: ?>
      <article>
          <h2 class="blog-post-title"><?php _e('没有找到内容'); ?></h2>
      </article>
  <?php endif; ?>

  <hr/>

  <center>
    <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
  </center>

<?php $this->need('footer.php'); ?>
