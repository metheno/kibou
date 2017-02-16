<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php $this->options->description(); ?>">
    <meta name="author" content="<?php $this->author(); ?>">
    <!-- 必须在最上面 -->

    <!-- 页面标题 -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- Bootstrap -->
    <link href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Theme Kibou 所使用的 CSS -->
    <link href="<?php $this->options->themeUrl('css/normalize.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/highlight.css'); ?>" rel="stylesheet">

    <!-- 为 macOS 中 Safari 打造的毛玻璃效果 -->
    <?php if ($this->options->enableTransparent == 0): ?>
      <link href="<?php $this->options->themeUrl('css/transparent.css'); ?>" rel="stylesheet">
      <style>
        @supports (-webkit-backdrop-filter: none) {
          body {
            background-image: url('<?php if ($this->options->enableTransparentBg): $this->options->enableTransparentBg(); endif; ?>');
            background-position: <?php if ($this->options->enableTransparentBgPosition): $this->options->enableTransparentBgPosition(); endif; ?>;
          }
        }
      </style>
    <?php endif; ?>

    <!-- 为阅读舒适性提供衬线字体 -->
    <?php if ($this->options->enableSerifFont == 0): ?>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
      <style>
        body {
          font-family: 'Roboto Slab', serif;
        }
      </style>
    <?php else: ?>
      <style>
        body {
          font-family: 'Roboto', 'Pingfang SC', 'Microsoft Yahei', sans-serif;
        }
      </style>
    <?php endif; ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $this->header(); ?>
  </head>

  <body>

    <!--[if lt IE 10]>
      <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
    <![endif]-->

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item <?php if($this->is('index')): echo "active"; endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
          <?php if($this->is('post')): ?>
            <a class="blog-nav-item active" href="<?php $this->permalink(); ?>"><?php _e('文章'); ?></a>
          <?php endif; ?>
          <?php if($this->is('archive')): ?>
            <a class="blog-nav-item active" href="<?php $this->permalink(); ?>"><?php _e('归档'); ?></a>
          <?php endif; ?>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
            <a class="blog-nav-item <?php if($this->is('page', $pages->slug)): echo "active"; endif; ?>"  href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
          <?php endwhile; ?>
        </nav>
      </div>
    </div>


    <div class="container">

      <!-- Header -->
      <div class="blog-header">
        <h1 class="blog-title">
            <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        </h1>
        <p class="lead blog-description">
          <?php if($this->is('archive')):
            $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('含 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', '');
            else:
              $this->options->description();
          endif; ?>
        </p>
      </div>

      <div class="row">
        <div class="blog-main">
