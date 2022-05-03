<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 297;
$thumb_height = 212;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <div class="main_title">
    <h2 class="wow fadeInDown" data-wow-delay="0.3s">
        <?php echo $bo_subject ?>
    </h2>
    <p class="wow fadeInDown" data-wow-delay="0.4s">
        <?php echo $bo_1 ?>
       
    </p>
    </div>
    <div class="detail container-lg">
        <ul class="clearfix flex-row-reverse">
    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';
        
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['src'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
            $img_link_html = '<a href="'.$wr_href.'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';

    ?>
        <li class="third wow bounceInUp" data-wow-delay="0.7s">
            <?php echo $img_content?>
            <p><?php echo $list[$i]['wr_subject']?></p>
            <strong>
                <!-- <span class="number" data-max="106" data-vel="30">106</span>건 -->
                <?php echo $list[$i]['wr_content']?>
            </strong>
        </li>                                 
       
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
         </ul>
    </div>




