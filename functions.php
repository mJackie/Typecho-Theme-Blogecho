<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {  
	$Wallpaper = new Typecho_Widget_Helper_Form_Element_Checkbox('Wallpaper', 
    array('isWallpaper' => _t('开启（背景壁纸来源img文件夹下background0.jpg~background10.jpg）')),
    array('isWallpaper'), _t('是否背景壁纸功能'));
    $form->addInput($Wallpaper->multiMode());

    $IconBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('IconBlock', 
    array('tr_admin' => _t('显示后台入口'),
    'tr_gplus' => _t('显示Google+'),
    'tr_twitter' => _t('显示Twitter'),
    'tr_fb' => _t('显示Facebook'),
    'tr_qqw' => _t('显示QQ'),
    'tr_weibo' => _t('显示微博'),
    'tr_github' => _t('显示Github'),
    'tr_rss' => _t('显示rss'),
    'tr_s_f' => _t('显示搜索栏')),
    array('tr_admin', 'tr_gplus', 'tr_twitter', 'tr_fb', 'tr_qqw', 'tr_weibo', 'tr_github', 'tr_rss', 'tr_s_f'), _t('图标栏显示'));
    $form->addInput($IconBlock->multiMode());

    $tr_gplusUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_gplusUrl', NULL, NULL, _t('设置 Google+ 地址'), _t(''));
    $form->addInput($tr_gplusUrl);

    $tr_twitterUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_twitterUrl', NULL, NULL, _t('设置 Twitter 地址'), _t(''));
    $form->addInput($tr_twitterUrl);

    $tr_fbUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_fbUrl', NULL, NULL, _t('设置 Facebook 地址'), _t(''));
    $form->addInput($tr_fbUrl);

    $tr_qqwUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_qqwUrl', NULL, NULL, _t('设置 QQ 地址'), _t(''));
    $form->addInput($tr_qqwUrl);

    $tr_weiboUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_weiboUrl', NULL, NULL, _t('设置微博地址'), _t(''));
    $form->addInput($tr_weiboUrl);

    $tr_githubUrl = new Typecho_Widget_Helper_Form_Element_Text('tr_githubUrl', NULL, NULL, _t('设置 Github 地址'), _t(''));
    $form->addInput($tr_githubUrl);
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

