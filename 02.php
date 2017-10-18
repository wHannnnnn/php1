<?php
$arr=array("新款连衣裙","四件套","潮流T恤","时尚女鞋","短裤","半身裙","男士外套","墙纸","行车记录仪","新款男鞋","耳机" );
$length=count($arr)

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
	* {
		margin: 0;
		padding: 0;
	}
	ul {
		background-color: #333;
		margin-left: 50px;
	}
	ul li {
		     list-style: none;
            float: left;
            margin-right: 20px;
            padding: 5px 0;
	}
	ul li a {
		text-decoration: none;
            font-weight: bolder;

	}

        ul a:hover {
            color: #fa6176;
        }

        .clear {
            clear:both;
        }


	</style>
</head>
<body>
<ul>
	<?php for($i=0;$i<$length;$i++){?>
	<li><a href="#"><?php echo $arr[$i] ?></a></li>
	<?php } ?>
	<div class="clear"></div>
</ul>
<!-- <ul>
	<?php foreach($arr as $value){?>
	<li><a href="#"><?php echo $value?></a></li>

	<?php }?>
	<div class="clear"></div>
</ul> -->
</body>
</html>