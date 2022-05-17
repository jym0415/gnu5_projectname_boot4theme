<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
 
  <?php echo latest('swiper_card2','main_slide',3,100)?>
</header>

<!-------------------------- 홀투어 -------------------------->

<div class="container">	
		<?php echo latest('hall','halltour','4','100')?>
	
</div><!-- /container -->

<!-------------------------- 이벤트 -------------------------->
<div id="event">
	<div class="container" >		
			<?php echo latest('event_title','event_title',1,1000)?>
			<?php echo latest('swiper_card2','event',3,100)?>
	</div><!-- /container -->
</div>







<!------------------------- 유튜브 ---------------------->


<div class="container-fluid" >
	<div class="center-heading ks4 hall">
		<!-- <h2>M Plus Wedding</h2>
		<span class="center-line"></span> -->
	</div>

		<div class="col-12">
			<?php echo latest('youtube','youtube',1,10000)?>
		</div>



</div><!-- /container -->





<!-------------------------- 게시판 -------------------------->

<div class="container mt-5 my-5">
	<div class="text-center ks4">
		<h2 class="ks4  hall">M Plus Wedding</h2>
		<span class="center-line"></span>
	</div>

	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<?php echo latest('theme/basic_main_one', 'notice',4, 100);?>
		</div>
		<div class="col-lg-6 col-12">
			<?php echo latest('theme/basic_main_one', 'reservation', 5, 40);?>
		</div>
	</div>
</div>



<!-------------------------- 인스타그램 -------------------------->
<div class="container">
	<div class="center-heading">
		<h2 class="ks4 hall">인스타그램</h2>
		<span class="center-line"></span>
	</div>

	<?php echo latest('instagram', 'instagram', 8, 100); ?>
</div>





<?php
include_once(G5_THEME_PATH.'/tail.php');