<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if ($this->options->enableTransparent == 1): ?>
  <link href="<?php $this->options->themeUrl('css/transparent.css'); ?>" rel="stylesheet">
  <style>
    @supports (-webkit-backdrop-filter: none) or (-webkit-filter: blur(20px)) or (-ms-filter: blur(20px)) or (-o-filter: blur(20px)) or (filter: blur(20px)) {
      body {
        background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
        background-position: <?php if ($this->options->enableTransparentBgPosition): $this->options->enableTransparentBgPosition(); endif; ?>;
      }

      @supports not (-webkit-backdrop-filter: none){
        .blog-masthead::before {
          background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
        }
        .blog-main::before {
          background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
        }
        .blog-footer::before {
          background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
        }
      }
    }
  </style>
<?php endif; ?>

<?php if ($this->options->enableSerifFont == 1): ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto Slab', serif;
    }
  </style>
<?php else: ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100italic,300italic,400italic,600italic,700italic,100,300,400,600,700" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', 'Pingfang SC', 'Microsoft Yahei', sans-serif;
    }
  </style>
<?php endif; ?>
