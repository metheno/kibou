<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
  <hr/>
  <?php function threadedComments($comments, $options) {
    $commentClass = '';
      if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
          $commentClass .= ' comment-by-author';
        } else {
          $commentClass .= ' comment-by-user';
      }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
  ?>
    <li id="li-<?php $comments->theId(); ?>" class="media<?php
      if ($comments->levels > 0) {
          echo ' comment-child';
          $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
      } else {
          echo ' comment-parent';
      }
      $comments->alt(' comment-odd', ' comment-even');
      echo $commentClass;
    ?>">
    <div class="media-left">
        <?php $comments->gravatar('50', ''); ?>
    </div>
    <div class="media-body">
      <p class="media-heading"><strong><?php $comments->author(); ?></strong></p>
      <span href="<?php $comments->permalink(); ?>" class="text-muted comment-meta"><?php $comments->date('Y-m-d H:i'); ?></span>
      <?php $comments->content(); ?>
      <span class="comment-reply"><?php $comments->reply(); ?></span>
    </div>
    <?php if ($comments->children) { ?>
        <div class="comment-children">
            <?php $comments->threadedComments($options); ?>
        </div>
    <?php } ?>
    </li>
  <?php } ?>

  <!-- Default -->
  <?php $this->comments()->to($comments); ?>

  <?php if ($comments->have()): ?>
    <h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
  <?php endif; ?>

  <?php if($this->allow('comment')): ?>
  <div id="<?php $this->respondId(); ?>" class="respond">
    <div id="cancel-reply-btn" class="btn btn-xs btn-default">
      <?php $comments->cancelReply(); ?>
    </div>

    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
      <h3 id="response"><?php _e('添加新评论'); ?></h3>
      <?php if($this->user->hasLogin()): ?>
      <p><?php _e('已登陆：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>。<a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('不是？退出'); ?> &raquo;</a></p>
      <?php else: ?>
      <p class="help-block">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="author" class="required"><?php _e('称呼'); ?></label>
            <input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required placeholder="<?php _e(''); ?>" onchange="this.value = aSpace(this.value);"/>
      		</div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
            <input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> placeholder="<?php _e('someone@example.com'); ?>" onchange="this.value = aSpace(this.value);"/>
      		</div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
            <input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('https://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> onchange="this.value = aSpace(this.value);"/>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="form-group">
        <label for="textarea" class="required"><?php _e('内容'); ?></label>
        <textarea rows="4" cols="50" name="text" id="textarea" class="form-control" placeholder="请自觉遵守互联网相关的政策法规，不发布色情、暴力、反动的言论。" onchange="this.value = aSpace(this.value);" required ><?php $this->remember('text'); ?></textarea>
      </div>
      <div class="form-group">
        <center><button type="submit" class="btn btn-theme btn-rounded"><?php _e('提交评论'); ?></button></center>
      </div>
	  </form>

  </div>
  <?php else: ?>
  <h3><?php _e('评论已关闭'); ?></h3>
  <?php endif; ?>

  <hr/>
</div>
