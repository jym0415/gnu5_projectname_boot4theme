<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    
    
    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';
        
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
            $img_link_html = '<a href="'.$wr_href.'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
   
    ?>

                <div class="center-heading ks4 hall">
                    <h2>
                        <?php echo $list[$i][wr_subject]; ?>
                    </h2>
                </div>
                <div class="center-heading ks4">	
                    <p><?php echo $list[$i][wr_content]; ?></p>
                    <br>
                    <span class="center-line"></span>
                </div>
    <?php }  ?>
