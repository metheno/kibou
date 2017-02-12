<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- /.row -->
      </div><!-- /.container -->

    <footer class="blog-footer">
      <p>&copy; Copyright <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
    </footer>

    <!-- Bootstrap Core JavaScripts -->
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.js'); ?>"></script>

    <!-- Load highlight.js -->
    <script src="<?php $this->options->themeUrl('js/highlight.js'); ?>"></script>
    <script type="text/javascript">hljs.initHighlightingOnLoad();</script>

    <!-- Optimize comments.php -->
    <script type="text/javascript">
      $(document).ready(function(){
        var reply_btn_display = $('#cancel-comment-reply-link').css('display');
        $("ol:first").removeClass("comment-list").addClass('media-list');
        if(reply_btn_display == 'none'){
          $("#cancel-reply-btn").css('display', 'none');
        };
      });
    </script>

  </body>
</html>
