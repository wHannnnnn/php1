<?php
$arr=array(
array(
	"h3"=>"传智播客java培训班_一直被模仿_从未被超越",
	"tupian"=>"images/1.jpg",
	"chuan"=>"传智播客java培训班,课程设置无缝对接企业用人需求,传智4个月,胜读4年书.来传智传智播客java培训班,做被企业疯抢的Jav..",
     "zaixian"=>"在线服务",
	"a1"=>"免费咨询更多详情",
	"a2"=>"www.itcast.cn   2017-10",
	"a3"=>"百度快照 - 317条评价"
	),
array(
	"h3"=>"传智播客PHP培训-聚集众多PHP培训精英讲师|PHP培训|PHP开发|PHP...",
	"tupian"=>"images/2.jpg",
	"chuan"=>"传智播客php培训拥有者业界超强的php培训课程体系,是业内php培训班中的佼佼者,为广大编程爱好者提供php培训,php培训班,php工程师培训,php程序员培训,php开发,php...",
     "zaixian"=>"在线服务",
	"a1"=>"免费咨询更多详情",
	"a2"=>"www.itcast.cn   2017-10",
	"a3"=>"百度快照 - 317条评价"
	),
array(
	"h3"=>"传智播客java培训班_一直被模仿_从未被超越",
	"tupian"=>"images/1.jpg",
	
	"chuan"=>"传智播客java培训班,课程设置无缝对接企业用人需求,传智4个月,胜读4年书.来传智传智播客java培训班,做被企业疯抢的Jav..",
     "zaixian"=>"在线服务",
	"a1"=>"免费咨询更多详情",
	"a2"=>"www.itcast.cn   2017-10",
	"a3"=>"百度快照 - 317条评价"
	),
array(
	"h3"=>"传智播客java培训班_一直被模仿_从未被超越",
	"tupian"=>"images/1.jpg",
	"chuan"=>"传智播客java培训班,课程设置无缝对接企业用人需求,传智4个月,胜读4年书.来传智传智播客java培训班,做被企业疯抢的Jav..",
     "zaixian"=>"在线服务",
	"a1"=>"免费咨询更多详情",
	"a2"=>"www.itcast.cn   2017-10",
	"a3"=>"百度快照 - 317条评价"
	),

	)
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	.box {
	 width: 540px;
	 margin-bottom: 28px;

	 color: #333;
	}
	h3 {
		font-weight: 400;
    font-size: 16px;
	}
	.neirong {
		margin-top: 4px;
		font-size: 14px;
		line-height: 20px;
		margin-bottom: 4px;
	}
	.tupian {
		float: left;
		width: 120px;
		margin-right: 17px;
	}
	.you {
		float: right;
		width: 400px;
		color: #333
	}
	.chuan {
		display: inline-block;

	}
	.zaixian {
    line-height: 20px;
    height: 20px;
    margin-top: 2px;
    margin-bottom: 10px;
	}
	.zaixian span {
		margin-right: 6px;
		color: #666
	}
	.zaixian a {
		color: #00c
	}
	img {
		width: 121px;
	
	}
	.wangzhi {
		line-height: 15px;
	}
	.wangzhi span {
		margin: 0 5px 0 0;
	}

	.zui a {
		text-decoration: none;
	}
	.zui .green {
		color:green;
		font-size: 12px
	}
	.clear {
		clear:both
	}


	</style>
</head>
<body>
<?php foreach($arr as $value) {?>
	<div class="box">
		<h3><a href="#"><?php echo $value["h3"]?></a></h3>
		<div class="neirong">
			<div class="tupian">
				<a href="#"><img src="<?php echo $value["tupian"]?>" alt=""></a>
			</div>
			<div class="you">
			<div class="chuan"><?php echo $value["chuan"]?></div>
			<div class="zaixian"><span><?php echo $value["zaixian"]?></span>
			<a href="#"><?php echo $value["a1"]?></a><br>
			<div class="zui"><a href="#"><span class="green"><?php echo $value["a2"]?></span><span><?php echo $value["a3"] ?></span></a></div>
			</div>
			<div class="clear"></div>
			</div> 
			
		</div>
	</div>
	<div class="clear"></div>

	<?php } ?>
</body>
</html>