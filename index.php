<?php
/**
 * 这位博主，请开始你的写作。
 *
 * @package Kibou
 * @author metheno
 * @version 0.1.5
 * @link http://www.metheno.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

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

        <center class="center-padding"><a href="<?php $this->permalink() ?>" class="btn btn-theme btn-rounded"><?php _e('阅读更多'); ?></a></center>
      </div>
    </article><!-- /.blog-post -->
  <?php endwhile; ?>

  <hr/>

  <center>
    <?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
  </center>

<?php $this->need('footer.php'); ?>
