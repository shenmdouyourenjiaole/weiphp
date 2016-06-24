<?php if (!defined('THINK_PATH')) exit(); if(empty($list_data)): ?><div class="empty_container"><p>您的图片素材库为空，<a href="<?php echo U('Home/Material/picture_lists');?>">请先增加素材</a></p></div>
<?php else: ?><div class="data_container"><ul class="material_list">
      <?php if(is_array($list_data)): $i = 0; $__LIST__ = $list_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[count]==1): ?><li class="appmsg_li" data-id="<?php echo ($vo["id"]); ?>" style="overflow:hidden">
            <div class="appmsg_item">
                <div class="main_img">
                    <img src="<?php echo ($vo["cover_url"]); ?>" width='100px' height='100px'/>
                </div>
            </div>
            <div class="hover_area"></div>
        </li><?php else: ?><li class="appmsg_li" data-id="<?php echo ($vo["id"]); ?>" data-group_id="<?php echo ($vo["group_id"]); ?>" style="overflow:hidden">
            <div class="appmsg_item">
                <div class="main_img">
                    <img src="<?php echo ($vo["cover_url"]); ?>" width='200px' height='200px'/>
                </div>
            </div>
            <div class="hover_area"></div>
        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul><?php endif; ?>
<div class="page"> <?php echo ((isset($_page) && ($_page !== ""))?($_page):''); ?> </div></div>