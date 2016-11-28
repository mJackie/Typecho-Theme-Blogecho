<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.css'); ?>" media="all" />
    <?php if (!empty($this->options->Wallpaper) && in_array('isWallpaper', $this->options->Wallpaper)): ?>
      <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/style.opacity.css'); ?>" media="all" />
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/code.css'); ?>" media="all" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php $this->options->themeUrl('img/logo.jpg'); ?>" />


    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>   
    
<body class="archive category">
  <div id="page">
   <hgroup id="ctn_header">
    <div id="title">
     <div id="site-title"><a href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title() ?></a></div>
     <div id="site-description"><?php $this->options->description() ?></div>
    </div>
    <div id="title_r">
      
      <?php if (!empty($this->options->IconBlock) && in_array('tr_admin', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->adminUrl(); ?>"><button class="tr_admin"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_gplus', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_gplusUrl() ?>"><button class="tr_gplus"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_twitter', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_twitterUrl() ?>"><button class="tr_twitter"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_fb', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_fbUrl() ?>"><button class="tr_fb"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_qqw', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_qqwUrl() ?>"><button class="tr_qqw"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_weibo', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_weiboUrl() ?>"><button class="tr_weibo"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_github', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->tr_githubUrl() ?>"><button class="tr_github"></button></a> 
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_rss', $this->options->IconBlock)): ?>
        <a href="<?php $this->options->feedUrl(); ?>"><button class="tr_rss"></button></a>
      <?php endif; ?>

      <?php if (!empty($this->options->IconBlock) && in_array('tr_s_f', $this->options->IconBlock)): ?>
         <span id="tr_clear"></span>
         <form id="tr_s_f" method="post" action="./" role="search"> 
            <input id="tr_search" name="s" size="10" type="text" />
         </form>
      <?php endif; ?>
    </div>
    <div class="clearfix"></div> 
   </hgroup>
   <div id="float">
    <a href="<?php $this->options->siteUrl(); ?>" title="TaterLi's  LazyBlog" rel="home"><img id="logo" src="<?php $this->options->themeUrl('img/logo.jpg'); ?>" /></a>
    <nav id="nav" role="navigation">
     <div>
      <ul class="menu">
       <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
      </ul>
     </div>
    </nav>
    <nav id="next" role="sencond_navigation">
     <div>
      <ul class="menu">
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a<?php if($this->is('page', $pages->slug)): ?> <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
        <?php endwhile; ?>
      </ul>
     </div>
    </nav>
   </div>
   <div id="ctn">
    <div id="content"> 