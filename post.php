<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <article class="post" >
            <hgroup class="post_hctn"> 
                <div class="post_time">
                    <div class="post_t_d"><?php $this->date("j/n");?></div>
                    <div class="post_t_u"><?php $this->date("Y"); ?> </div>
                </div>
                <div class="post_h_l"> 
                    <h2 class="post_h"><?php $this->title() ?></h2>
                    <div class="post_tag"> 
                        <span class="post_c" ><?php $this->category(','); ?></span> 
                        <span class="post_c"><?php $this->tags(' ', true, ''); ?></span> 
                        <span class="post_c"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></span> 
                    </div>
                </div> 
            </hgroup>
            <div class="post_t">
                <p class="read-more"><?php $this->content(); ?></p>
            </div>
        </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>

<?php $this->need('footer.php'); ?>
