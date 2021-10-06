<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="notice clearfix">
	<div class="title">
		<a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a>
		<a href="<?php echo get_pretty_url($bo_table); ?>" class="btn">btn</a>
	</div>

    <?php for ($i=0; $i<$list_count; $i++) {  ?>
		<div class="content">


			<div class="subject">
				<? 
				 echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
				if ($list[$i]['is_notice'])
					echo "<strong>".$list[$i]['subject']."</strong>";
				else
					echo $list[$i]['subject'];

				echo "</a>";
				?>
			</div>
			
			<div class="etc">
				<?php echo $list[$i]['name'] ?>
				<?php echo $list[$i]['datetime2'] ?>
			</div>
		
		</div>	
	<? } ?>
	
</div>






