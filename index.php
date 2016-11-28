<?php
/**
 * Blogecho 主题特性：
 * 1. 集成代码高亮
 * 2. 完美兼容 MarkDown 语法
 * 3. 背景壁纸随机更换
 * 4. 响应式布局
 * @package Blogecho
 * @author Jackie Liu
 * @version 1.0
 * @link http://jackieliu.win
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


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

    <?php $this->pageNav('前一页', '后一页'); ?>


<?php $this->need('footer.php'); ?>
