<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post indexpost" >
                <hgroup class="post_hctn"> 
                    <div class="post_time">
                        <div class="post_t_d"><?php $this->date("j/n");?></div>
                        <div class="post_t_u"><?php $this->date("Y"); ?> </div>
                    </div>
                    <div class="post_h_l"> 
                        <h2 class="post_h"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                        <div class="post_tag"> 
                            <span class="post_c" ><?php $this->category(','); ?></span> 
                            <span class="post_c"><?php $this->tags(' ', true, ''); ?></span> 
                            <span class="post_c"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span> 
                        </div>
                    </div> 
                </hgroup>
                <div class="post_t">
                    <p class="read-more"><?php $this->content(''); ?></p>
                    <p class="read-more"><a href="<?php $this->permalink() ?>">+ MORE</a></p>
                </div>
            </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

	<?php $this->need('footer.php'); ?>
