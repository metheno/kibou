<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 时间归档
 *
 * @package custom
 */

$this->need('header.php'); ?>

<article itemscope="" itemtype="http://schema.org/BlogPosting">
  <div class="blog-post">
    <h2 class="blog-post-title" itemprop="name headline"><?php _e('Tag Cloud'); ?></h2>

    <div class="center-padding">
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>

      <?php if($tags->have()): ?>
        <?php while ($tags->next()): ?>
          <a href="<?php $tags->permalink(); ?>" rel="tag" class="btn btn-sm btn-transparent" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
        <?php endwhile; ?>
        <?php else: ?>
          <p><?php _e('没有任何标签'); ?></p>
      <?php endif; ?>
    </div>

    <?php $this->content(); ?>
    <?php $this->need('comments.php'); ?>

  </div>
</article><!-- /.blog-post -->

<?php $this->need('footer.php'); ?>
