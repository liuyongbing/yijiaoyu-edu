<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="bookmark" href="/favicon.ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="nfOGT6TmKZbUOnq11spye7M7GYONJ9SSoyNufR8B">

    <title>卡牌列表</title>

    <!-- Styles -->
    <link href="/pocketcat/css/css.css?v=20180910131915" rel="stylesheet">
    <link href="/pocketcat/css/bootstrap.css?v=20180910131915" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/pocketcat/css/jquery.vm-carousel2.css?v=20180910131915">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"nfOGT6TmKZbUOnq11spye7M7GYONJ9SSoyNufR8B"}
    </script>
</head>
<body class="body-bg05">
<div class="kp">
    <div class="center prel">
        <div class="title">
            <div class="title1">
                &gt; <a href="{{ route('grades.index') }}">首页</a> 
                &gt;  <a href="{{ route('grades.index') }}">{{ $grade['title'] }}</a> 
                &gt;  <a href="{{ route('courses.show', ['id' => $item['id']]) }}">{{ $item['title'] }}</a>
            </div>
            <!--div class="title2">
                <a href="/">返回</a>  <a href="#">上一页</a> <a href="#">下一页</a>
            </div-->
        </div>
    </div>

    <div class="htmleaf-container2">
        <div class="container">
            <ul>
                <li>
                @for($num = 1; $num <= $item['class_total']; $num++)
                    @if ($num%6 == 0)
                </li>
                <li>
                    @endif
                    <a href="{{ route('coursewares.index', [
                        'course_id' => $item['id'],
                        'class_number' => $num,
                    ]) }}" class="class-btn">{{ $num }} 课时</a>
                @endfor
                </li>
            </ul>
        </div>
    </div>
</div>

</body>

<!-- Scripts -->
<script type="text/javascript" src="/pocketcat/js/jquery-3.2.1.min.js?v=20180910131915"></script>
<script type="text/javascript" src="/pocketcat/js/bootstrap.min.js?v=20180910131915"></script>
<script type="text/javascript" src="/pocketcat/js/modernizr.js?v=20180910131915"></script>
<script type="text/javascript" src="/pocketcat/js/reflection.js?v=20180910131915"></script>
<script type="text/javascript" src="/pocketcat/js/jquery.vm-carousel.js?v=20180910131915"></script>
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
