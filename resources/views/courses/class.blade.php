@extends('layouts.main')

@section('title', '课时列表')

@section('body')
<body class="body-bg02">
<div class="stage-detail">
    <div class="center prel">
        <div class="step">
            <a href="{{ route('grades.index') }}"> < 首页</a>
            <a href="{{ route('courses.index', ['grade_id' => $grade['id']]) }}"> < {{ $grade['title'] }}</a>
            <a href="{{ route('courses.show', ['id' => $item['id']]) }}"> < {{ $item['title'] }}</a>
        </div>
        
        <!--div class="page-btn pabs">
            <a href="javascript:void(0);">返回</a>
            <a href="javascript:void(0);">上一页</a>
            <a href="javascript:void(0);">下一页</a>
        </div-->
        
        <div class="class-center">
            <div class="class-list prel">
                <!--div class="page-num pabs">2</div-->
                @for($num = 1; $num <= $item['class_total']; $num++)
                <a href="{{ route('coursewares.index', [
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
@include('layouts.logout')
</body>
@endsection