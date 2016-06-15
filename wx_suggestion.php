
<!-- require_once "jssdk.php";
$jssdk = new JSSDK("wx475b1829f02db10d", "50c7fc15b189ce1dda371c7286f6baf5");
$signPackage = $jssdk->GetSignPackage(); -->

<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="感知i家">
    <meta name="keywords" content="感知i家">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <!-- 全屏显示 WebApp，隐藏 Safari 导航栏以及工具栏 -->
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <!-- 屏蔽iPhone下的拨号链接-->
    <meta content="telephone=no" name="format-detection" />
    <!-- 不让android识别邮箱 -->
    <meta content="email=no" name="format-detection" />
    <!-- 设置系统状态栏风格 -->
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <title>用户反馈</title>
    <link rel="stylesheet" type="text/css" href="./static/css/style.css">
    <script type="text/javascript" src="./static/js/lib/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="./static/js/lib/veryless.js"></script>
    <script type="text/javascript" src="./static/js/lib/zepto.js"></script>
</head>

<body id="container">
    <div id="feedback_img">
        <img class="plus small_img">
    </div>
    <div id="feedback_textarea">
        <textarea rows="3" cols="20" placeholder="非常感谢您为我们提出改进建议，我们的客服人员会稍后联系您！"></textarea>
    </div>  
    <button id="feedback_button"><span>提交</span></button>        
</body>
<!-- <script>
    wx.config({
        debug: true,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: '<?php echo $signPackage["timestamp"];?>',
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            'chooseImage', 'uploadImage', 'downloadImage'
        ]
    });
</script> -->
<script type="text/javascript" src="./static/js/script/index.js"></script>
</html>