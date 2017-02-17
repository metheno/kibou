<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

            <?php if(!$this->is('post') && !$this->is('page')): ?>
              <center class="center-padding">
                <form class="form-inline" id="search" method="post" action="./" role="search">
                  <div class="form-group">
                    <input type="text" name="s" class="form-control" placeholder="<?php _e( '输入关键字搜索'); ?>" onchange="this.value = aSpace(this.value);">
                  </div>
                  <button type="submit" class="btn btn-transparent"><?php _e( '搜索'); ?></button>
                </form>
              </center><!-- ./search -->
            <?php endif; ?>

          </div><!-- /.blog-main -->

        </div><!-- /.row -->
      </div><!-- /.container -->

    <center>
      <footer class="blog-footer">
        <p>&copy; Copyright <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></p>
      </footer>
    </center>

    <!-- Core JavaScripts -->
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.js'); ?>"></script>

    <!-- Load Theme Dedicated JS -->
    <script src="<?php $this->options->themeUrl('js/highlight.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ASpace.js'); ?>"></script>
    <script type="text/javascript">
      hljs.initHighlightingOnLoad();
      aSpace(document.getElementsByClassName('blog-post'));
    </script>

    <!-- Optimize comments.php -->
    <script type="text/javascript">
      $(document).ready(function(){
        var reply_btn_display = $('#cancel-comment-reply-link').css('display');
        $(".comment-list:first").removeClass("comment-list").addClass('media-list');
        if(reply_btn_display == 'none'){
          $("#cancel-reply-btn").css('display', 'none');
        };
      });
    </script>
    
    <?php if ($this->options->analyticsGoogle): ?>
      <!-- Google Analytics -->
      <script>
        <?php $this->options->analyticsGoogle(); ?>
      </script>
    <?php endif; ?>

    <?php if ($this->options->enableMathJax == 1): ?>
      <!-- MathJax Supports -->
      <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
      <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
          extensions: ["tex2jax.js"],
          jax: ["input/TeX", "output/HTML-CSS"],
          tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true
          },
          "HTML-CSS": { availableFonts: ["TeX"] }
        });
      </script>
    <?php endif; ?>

  </body>
</html>
