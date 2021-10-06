

<style TYPE="text/css">
<!--
#snb{width:100%;}
	#snb {width:100%;}
	#snb > li.snb{width:100%;display:none;}
	#snb > li.snb.active{display:block !important;}
	#snb > li > h2{width:100%;background:#000;}
	#snb > li > h2 a{display:block;background:#000; text-align:center; padding:80px 10px; color:#fff;}
	#snb > li > h2 a b{display:block;font-size:18px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
	#snb > li > h2 a sub{display:block;padding-top:10px;font-family:vardana;font-size:12px;letter-spacing:0.05em;font-weight:normal;filter:Alpha(opacity=50); opacity:0.5; -moz-opacity:0.5;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
	#snb > li .snb2dDown{display:none;}

	#snb > li > ul{}
	#snb > li > ul > li{border-bottom: 1px solid #ddd;}
	#snb > li > ul > li a{display:block;padding:15px;color:#666;-webkit-transition-duration: 0.2s;-webkit-transition-timing-function: ease;transition-duration: 0.2s;transition-timing-function: ease;}
	#snb > li > ul > li a b{font-size:13px;}
	#snb > li > ul > li a:hover{background:#f3f3f3;padding-left:20px;color:#000;-webkit-transition-duration: 0.2s;-webkit-transition-timing-function: ease;transition-duration: 0.2s;transition-timing-function: ease;}
	#snb > li > ul > li.snb2d.active a{background:#ddd;color:#000;}
	#snb > li > ul > li a{overflow:hidden;}
	#snb > li > ul > li a i{float:right;}

//-->
</style>

<div id="mysubmenu">
    <?php /* 주의사항 아래 코드를 수정하시면 페이지 현재위치 및 서브메뉴,모바일메뉴가 정상작동되지 않을 수 있습니다. */ ?>
		<ul id="snb"><!-- <li class="snbHome"><h2><a href="<?php echo G5_URL ?>"><b>HOME</b></a></h2></li> -->
		<?php $sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id "; $result = sql_query($sql, false);
		for ($i=0; $row=sql_fetch_array($result); $i++) {
	    $gnbM = explode("?",$row['me_link']);
		$gnbM_kind_id = explode("=",$gnbM[1]);
		$gnbM_kind = $gnbM_kind_id[0];
		$gnbM_idA = $gnbM_kind_id[1];
		$gnbM_lt = explode("&",$gnbM_idA);
		$gnbM_id = $gnbM_lt[0]; $gnbM_idL = $gnbM_kind_id[2]; ?>

		<li class="snb <?php echo $gnbM_kind; ?><?php echo $gnbM_id; ?><?php echo $gnbM_idL; ?>
		<?php $sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
		$result2 = sql_query($sql2);
    for ($k=0; $row2=sql_fetch_array($result2); $k++) {
      $gnbM2 = explode("?",$row2['me_link']);
      $gnbM_kind_id2 = explode("=",$gnbM2[1]);
      $gnbM_kind2 = $gnbM_kind_id2[0];
      $gnbM_idA2 = $gnbM_kind_id2[1];
      $gnbM_lt2 = explode("&",$gnbM_idA2);
      $gnbM_id2 = $gnbM_lt2[0];
      $gnbM_idL2 = $gnbM_kind_id2[2];
      if($k == 0)  echo ' ';echo $gnbM_kind2;echo $gnbM_id2; echo $gnbM_idL2; echo ' ';}?>">


		<h2><a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><b><?php echo $row['me_name'] ?></b> <sub><?php echo $_SERVER['HTTP_HOST']; ?></sub></a></h2><?php $sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id "; $result2 = sql_query($sql2); for ($k=0; $row2=sql_fetch_array($result2); $k++) {$gnbM2 = explode("?",$row2['me_link']); $gnbM_kind_id2 = explode("=",$gnbM2[1]); $gnbM_kind2 = $gnbM_kind_id2[0]; $gnbM_idA2 = $gnbM_kind_id2[1]; $gnbM_lt2 = explode("&",$gnbM_idA2);$gnbM_id2 = $gnbM_lt2[0];$gnbM_idL2 = $gnbM_kind_id2[2]; if($k == 0) echo '<em class="snb2dDown"><i class="fa fa-angle-down"></i><u class="fa fa-angle-up"></u></em><ul class="snb2dul">'; ?><li class="snb2d snb2d_<?php echo $gnbM_kind2; ?><?php echo $gnbM_id2; ?><?php echo $gnbM_idL2; ?>"><a href="<?php echo $cube_link ; ?><?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" ><b><i class="fa fa-angle-right"></i> <?php echo $row2['me_name'] ?></b></a></li><?php } if($k > 0) echo '</ul>'; ?></li><?php } ?><li class="snb noInfoPageTit"></li></ul>
		<!-- // SNB -->


</div>
<script>
<?php if ($co_id){ ?>$(function(){$('.snb.co_id<?php echo $co_id;?>, .snb .snb2d_co_id<?php echo $co_id;?>').addClass('active');});/*  컨텐츠관리 : co_id<?php echo $co_id;?>  */<?php } else { if ($bo_table){ ?>$(function(){$('.snb.bo_table<?php echo $bo_table;?>, .snb .snb2d_bo_table<?php echo $bo_table;?>').addClass('active');});/*  보테이블 : bo_table<?php echo $bo_table;?>  */<?php } else { ?>$(function(){$('.snb.gr_id<?php echo $gr_id;?>, .snb .snb2d_gr_id<?php echo $gr_id;?>').addClass('active');});/*  그룹아이디 : gr_id<?php echo $gr_id;?>  */<?php } } ?>

<?php if ($co_id || $bo_table || $gr_id){ ?>$(document).ready(function(){ if ( $("#snb > li").is(".snb.active") ) { $('.loc1D').text( $('<?php if ($co_id){ ?>#snb .co_id<?php echo $co_id;?> h2 a b<?php } else { if ($bo_table){ ?>#snb .bo_table<?php echo $bo_table;?> h2 a b<?php } else if ($gr_id) { ?>#snb .gr_id<?php echo $gr_id;?> h2 a b<?php } } ?>').text());$('.loc2D').html( $('<?php if ($co_id){ ?>.snb2d_co_id<?php echo $co_id;?> a b<?php } else { if ($bo_table){ ?>.snb2d_bo_table<?php echo $bo_table;?> a b<?php } else { ?>.snb2d_gr_id<?php echo $gr_id;?> a b<?php } } ?>').html());$('.faArr').html('<i class="fa fa-angle-right"></i>');var index = $("#snb > li").index("#snb > li.active");<?php if ($menuNum){ ?>$( "#page_title" ).addClass("subTopBg_0<?php echo $menuNum ?>");<?php } else { ?>$( "#page_title" ).addClass("subTopBg_0"+($("<?php if ($co_id){ ?>#snb > li.co_id<?php echo $co_id ?><?php } else { if ($bo_table){ ?>#snb > li.bo_table<?php echo $bo_table ?><?php } else { ?>#snb > li.gr_id<?php echo $gr_id ?><?php } } ?>").index() + 1) );<?php } ?> } else { $('.loc1D').text('<?php echo get_head_title($g5['title']); ?>'); $('.noInfoPageTit').html('<h2><a><b><?php echo get_head_title($g5['title']); ?></b><sub><?php echo $_SERVER["HTTP_HOST"]; ?></sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); } });  <?php } else { ?> $(document).ready(function(){ $('.loc1D').text('<?php echo get_head_title($g5['title']); ?>'); $('.noInfoPageTit').html('<h2><a><b><?php echo get_head_title($g5['title']); ?></b><sub><?php echo $_SERVER["HTTP_HOST"]; ?></sub></a></h2>'); $('.noInfoPageTit').addClass('active');$('#page_title').addClass('subTopBg_00'); });<?php } ?>
</script>
