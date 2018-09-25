<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="bookmark" href="/favicon.ico" />

    <title>卡牌列表</title>

    <!-- Styles -->
    <link href="pocketcat/css/css.css?v=20180910131915" rel="stylesheet">
    <link href="pocketcat/css/bootstrap.css?v=20180910131915" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pocketcat/css/jquery.vm-carousel2.css?v=20180910131915">

</head>
<body class="body-bg04">
<div class="kp">
    <div class="center prel">
        <div class="title">
            &gt; <a href="/">首页</a> &gt;  <a href="#">明星课时卡</a>
        </div>
    </div>

    <div class="htmleaf-container2">
        <div class="container">
            <ul class="vmcarousel-centered vmc-centered">
            @foreach($items as $key => $item)
                <li>
                    <label>
                        <a class="bt" href="{{ route('courses.class', ['id' => $item['id']]) }}">
                            <img src="pocketcat/images/more.png" width="130" style="width: 130px" />
                        </a>
                    </label>
                    <a href="{{ route('courses.class', ['id' => $item['id']]) }}">
                        <img class="reflect" src="{{ $item['image_url'] }}" width="180" />
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>

</body>

<!-- Scripts -->
<script type="text/javascript" src="pocketcat/js/jquery-3.2.1.min.js?v=20180910131915"></script>
<script type="text/javascript" src="pocketcat/js/bootstrap.min.js?v=20180910131915"></script>
<script type="text/javascript" src="pocketcat/js/modernizr.js?v=20180910131915"></script>
<script type="text/javascript" src="pocketcat/js/reflection.js?v=20180910131915"></script>
<script type="text/javascript" src="pocketcat/js/jquery.vm-carousel.js?v=20180910131915"></script>
<script type="text/javascript">
    jQuery(function($){
        $('.vmcarousel-centered').vmcarousel({
            centered: true,
            start_item: 1,
            autoplay: false,
            infinite: false
        });
    });
</script>
</html>
