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

    <div style="padding-top: 20px;">
      <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0&limit=1000')->to($tags); ?>

      <?php if($tags->have()):?>
        <?php while ($tags->next()): ?>
          <a href="<?php $tags->permalink(); ?>" rel="tag" class="archives-tags" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
        <?php endwhile; ?>
        <?php else: ?>
          <p><?php _e('没有任何标签'); ?></p>
      <?php endif; ?>
    </div>

    <hr/>

    <ol class="archives-loop-ol">
      <?php
        $this->widget('Widget_Contents_Post_Recent', 'pageSize=1000')->to($archives);
        while($archives->next()):
      ?>
      <a class="archives-loop-li" href="<?php $archives->permalink() ?>"><li itemprop="name headline"><span class="text-muted" style="padding-right:5px"><?php $archives->date('Y-m-d'); ?></span><?php $archives->title() ?></li></a>
      <?php endwhile; ?>
    </ol>

    <?php // echo PostRenderer::parse($this->content); ?>
    <?php $this->content(); ?>
    <?php $this->need('comments.php'); ?>

  </div>
</article><!-- /.blog-post -->

<?php $this->need('footer.php'); ?>
