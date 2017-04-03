<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 友情链接
 *
 * @package custom
 */

$this->need('header.php'); ?>

<article itemscope="" itemtype="http://schema.org/BlogPosting">
  <div class="blog-post">
    
	<h2 class="blog-post-title" itemprop="name headline"><?php $this->archiveTitle('','',''); ?></h2>
	
	<?php if(class_exists('Links_Plugin') && isset($this->options->plugins['activated']['Links'])): ?>
    <aside>
            <ul class="links">
               <?php Links_Plugin::output("SHOW_MIX", NULL, NULL); ?>
            </ul>
    </aside>
    <?php endif; ?>
    
    

 


    <?php $this->content(); ?>
    <?php $this->need('comments.php'); ?>

  </div>
</article>

<?php $this->need('footer.php'); ?>
