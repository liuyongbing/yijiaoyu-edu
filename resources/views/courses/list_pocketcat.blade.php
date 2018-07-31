<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="x5-orientation" content="portrait">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="renderer" content="webkit" />
    <title>口袋猫——卡种</title>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <link rel="stylesheet" type="text/css" href="utils/swiper/swiper.min.css"/>

    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
    <div class="content card-content">
        <h3 class="title">
            < <a href="{{ route('grades.index') }}">首页 </a>
            < <a href="{{ route('courses.index', ['grade_id' => $grade['id']]) }}">{{ $grade['title'] }} </a>
        </h3>
        <div class="inner card_inner">
            <div class="swiper-container" id="scroll-card">
                <div class="scroll_box swiper-wrapper" >
                @if (!empty($items))
                    <ul class="scroll_ul swiper-slide">
                    @foreach($items as $key => $item)
                        <li class="item">
                            <a href="{{ route('courses.class', ['id' => $item['id']]) }}" class="link">查看课时</a>
                            <a href="javascript:;">
                                <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}"/>
                            </a>
                            <div class="down">
                                <div class="reflection"></div>
                                <div class="overlay"></div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                @endif
                    <!--ul class="scroll_ul swiper-slide">
                        <li class="item">
                            <a href="javascript:;" class="link">查看课时</a>
                            <a href="javascript:;">
                                <img src="imgs/card01.jpg" alt="01"/>
                            </a>
                            <div class="down">
                                <div class="reflection"></div>
                                <div class="overlay"></div>
                            </div>
                        </li>
                        <li class="item swiper-slide">
                            <a href="javascript:;" class="link">查看课时</a>
                            <a href="javascript:;">
                                <img src="imgs/card02.jpg" alt="01"/>
                            </a>
                            <div class="down">
                                <div class="reflection"></div>
                                <div class="overlay"></div>
                            </div>
                        </li>
                    </ul-->
                </div>
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