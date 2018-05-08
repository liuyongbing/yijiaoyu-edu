<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/css/css.css" />
    <title>齐天大圣</title>
</head>
<body class="body-bg02">

<div class="stage-detail">
	
	<div class="center prel">
			
        <div class="step">
            <a href="javascript:void(0);"> < 首页</a>
            <a href="javascript:void(0);"> < 入门活动卡</a>
            <a href="javascript:void(0);"> < 白带</a>
        </div>
        
        <div class="page-btn pabs">
            <a href="javascript:void(0);">返回</a>
            <a href="javascript:void(0);">上一页</a>
            <a href="javascript:void(0);">下一页</a>
        </div>
        
        <div class="class-center">
            
            <div class="class-list prel">
                
                <!--div class="page-num pabs">2</div-->
                
                @for($num = 1; $num <= $item['class_total']; $num++)
                <a href="{{ route('teachings.index', [
                    'course_id' => $item['id'],
                    'class_number' => $num,
                ]) }}">
                    <b>{{ $num }}</b>
                    <label>课时</label>
                </a>
                @endfor
                
            </div>
        </div>
	</div>
	
</div>

</body>

</html>
