<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="x5-orientation" content="portrait">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="renderer" content="webkit" />
    <title>口袋猫——后台</title>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="utils/swiper/swiper.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
    <div class="content">
        <h3 class="title">
            <a href="javascript:;" class="logo">
                <img src="imgs/logo.png" alt="logo" />
            </a>
        </h3>
        <div class="inner ">
            <div class="scroll_box swiper-container" id="scroll-class">
                <ul class="scroll_ul swiper-wrapper">
                @foreach($items as $item)
                    <li class="item swiper-slide">
                        <a href="{{ route('courses.index', ['grade_id' => $item['id']]) }}">
                            <img src="{{ $item['image_url'] }}"" alt="{{ $item['title'] }}"">
                        </a>
                        <div class="down"><!--放置倒影 -->
                            <div class="reflection"></div> <!--放置倒影图片-->
                            <div class="overlay"></div> <!--设置渐变-->
                        </div> 
                    </li>
                @endforeach
                </ul>
                <div class="swiper-button-prev icon-prev"></div>
                <div class="swiper-button-next icon-next"></div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="utils/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="utils/swiper/swiper.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>