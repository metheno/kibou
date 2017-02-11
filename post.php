<div class="blog-main">

  <article itemscope="" itemtype="http://schema.org/BlogPosting">
    <div class="blog-post">
      <h2 class="blog-post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <p class="blog-post-meta">
        <?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>&nbsp;|&nbsp;
        <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>&nbsp;|&nbsp;
        <?php _e('分类: '); ?><?php $this->category(','); ?>
      </p>

      <?php $this->content(); ?>

      <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
  </article><!-- /.blog-post -->

  <?php // $this->need('comments.php'); ?>

  <!-- Not completed -->
  <ul class="post-near">
    <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
    <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
  </ul>

  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
      <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
  </nav><!-- /.pagination -->

</div><!-- /.blog-main -->

<?php $this->need('footer.php'); ?>
