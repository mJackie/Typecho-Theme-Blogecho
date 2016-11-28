<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div>
   </div>

   
   <footer id="footer" role="contentinfo">
     Theme Design by <a href="http://jackieliu.win" style=" display:inline-block ">Jackie Liu</a>
   </footer>

  <script type="text/javascript" src="<?php $this->options->themeUrl('js/prettify.js'); ?>"></script>
  
    <script type="text/javascript">
      window.onload = function () {
        change();
        //代码高亮开始
        var pre = document.getElementsByTagName('pre');
        for(i=0,l=pre.length;i<l;i++) 
          pre[i].className += " prettyprint linenums";
        prettyPrint();
      }
    </script>
    
    <?php if (!empty($this->options->Wallpaper) && in_array('isWallpaper', $this->options->Wallpaper)): ?>
      <script type="text/javascript">
        function change(){
          //随机背景图片
          var i = Math.random();  //产生0-1之间的随机数
          i = i * 10;             //用随机数乘以10
          i = Math.round(i);      //取整
          var path = "";
          switch(i){
            case 0: path = "<?php $this->options->themeUrl('img/background0.jpg'); ?>";break;    //背景位置
            case 1: path = "<?php $this->options->themeUrl('img/background1.jpg'); ?>";break;
            case 2: path = "<?php $this->options->themeUrl('img/background2.jpg'); ?>";break;
            case 3: path = "<?php $this->options->themeUrl('img/background3.jpg'); ?>";break;
            case 4: path = "<?php $this->options->themeUrl('img/background4.jpg'); ?>";break;
            case 5: path = "<?php $this->options->themeUrl('img/background5.jpg'); ?>";break;
            case 6: path = "<?php $this->options->themeUrl('img/background6.jpg'); ?>";break;
            case 7: path = "<?php $this->options->themeUrl('img/background7.jpg'); ?>";break;
            case 8: path = "<?php $this->options->themeUrl('img/background8.jpg'); ?>";break;
            case 9: path = "<?php $this->options->themeUrl('img/background9.jpg'); ?>";break;
            case 10: path = "<?php $this->options->themeUrl('img/background10.jpg'); ?>";break;
          }
          document.body.style.backgroundImage = "URL("+path+")";  //显示对应的图片
        }
      </script>
    <?php endif; ?>

  </div>
 </body>
</html>