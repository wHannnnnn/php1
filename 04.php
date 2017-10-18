<?php
/*
我在看java视频的时候为什么包定义成cn.itcast是什么意..._百度知道
2个回答 - 最新回答: 2013年01月15日 - 69人觉得有用
最佳答案: 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...
更多关于itcast的问题>>
zhidao.baidu.com/link?...  - 百度快照
*/

$list = array(
    array(
        "title"=> "我在看java视频的时候为什么包定义成cn.itcast是什么意..._百度知道",
        "datetime"=> "2个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "最佳答案: 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    ),
    array(
        "title"=> "我在看java视频的时候为什么包定义成cn.itcast是什么意..._百度知道",
        "datetime"=> "2个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "最佳答案: 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    ),
    array(
        "title"=> "我在看java视频的时候为什么包定义成cn.itcast是什么意..._百度知道",
        "datetime"=> "2个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "最佳答案: 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    ),
    array(
        "title"=> "我在看java视频的时候为什么包定义成cn.itcast是什么意..._百度知道",
        "datetime"=> "2个回答 - 最新回答: 2013年01月15日 - 69人觉得有用",
        "desc"=> "最佳答案: 呵呵,程序员有个不成文的规范,包的命名一般都是以自己公司或企业的域名来,如果我没猜错的话,出这个视频的人所在的公司域名应该为www.itcast.cn。没...",
        "other"=> "更多关于itcast的问题>>",
        "kuaizhao"=> "zhidao.baidu.com/link?...  - 百度快照"
    )
);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach( $list as $value ) { ?>
        <dl>
            <dt><?php echo $value[ "title" ] ?></dt>
            <dd>
                <p><?php echo $value[ "datetime" ] ?></p>
                <p><?php echo $value[ "desc" ] ?></p>
                <p><?php echo $value[ "other" ] ?></p>
                <p><?php echo $value[ "kuaizhao" ] ?></p>
            </dd>
            <hr>
        </dl>
        <?php }?>
    </div>
</body>
</html>