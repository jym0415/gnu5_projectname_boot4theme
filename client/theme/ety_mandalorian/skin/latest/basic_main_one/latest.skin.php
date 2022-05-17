<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<style>
.main_one_title {
    position: relative;
    display: block;
    width: 191px;
    text-align: left;
    color: #111;
    padding: 15px 0px 15px 0px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    margin-left: 15px;
}
.one_more{position:absolute;top:15px;right:15px;font-size:22px}
</style>

<div class="row">
	<div class="col-md-12 main_one_title ks4">
		<?php echo $bo_subject?>
		
	</div>
</div>
<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="one_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true" style="font-size:22px;line-height: 1px;"></i><span class="sound_only"> 더보기</span></a>
<div class="lat_list_one">
    <ul>
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <li class="ks4">
            <?php
          
            echo "<a href=\"".$list[$i]['href']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];
            echo "</a>";


            ?>

            <span class="lt_date hidden-xs hidden-sm"><?php echo $list[$i]['datetime2'] ?></span>
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
	
</div>
