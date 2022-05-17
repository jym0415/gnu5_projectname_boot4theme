<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php for ($i=0; $i<$list_count; $i++) {  ?>


<li class="youtubeBox">
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/<?php echo $list[$i][subject] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</li>      

         
          
    <?php }  ?>
