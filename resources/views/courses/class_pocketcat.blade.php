<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="x5-orientation" content="portrait">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1">
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="renderer" content="webkit" />
    <title>口袋猫——课时选择</title>
    <link rel="stylesheet" type="text/css" href="/css/base.css"/>

    <link rel="stylesheet" type="text/css" href="/css/class.css"/>
</head>
<body>
    <div class="content class-content">
        <div class="title">
            < <a href="{{ route('grades.index') }}">首页 </a>
            < <a href="{{ route('courses.index', ['grade_id' => $grade['id']]) }}">{{ $grade['title'] }} </a>
            < <a href="{{ route('courses.show', ['id' => $item['id']]) }}">{{ $item['title'] }} </a>
        </div>
        <div class="selectBox">
            <ul class="selectUl">
            @for($num = 1; $num <= $item['class_total']; $num++)
                <li class="item fl">
                    <a href="{{ route('coursewares.index', [
                        'course_id' => $item['id'],
                        'class_number' => $num,
                    ]) }}">
                      <span>{{ $num }}</span>课时
                    </a>
                </li>
            @endfor
            </ul>
        </div>
    </div>
</body>
</html>