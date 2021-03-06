@extends('layouts.main')

@section('title', '课程简介')

@section('style')
    <link href="{{ asset(elixir('css/jquery.mCustomScrollbar.css')) }}{{ $STATIC_VERSION }}" rel="stylesheet" />
@endsection
    
@section('body')

<body class="body-bg01">
<div class="stage-detail">
    <div class="center">
        <div class="step">
            <a href="{{ route('grades.index') }}"> < 首页</a>
            <a href="{{ route('courses.index', ['grade_id' => $grade['id']]) }}"> < {{ $grade['title'] }}</a>
            <a href="{{ route('courses.show', ['id' => $item['id']]) }}"> < {{ $item['title'] }}</a>
        </div>
        <div class="detail-center">
            <div class="kp l"><span><img src="{{ $item['image_url'] }}" class="reflect"></span></div>
            <div class="txt l">
                <b>{{ $item['title'] }}</b>
                <div>{!! $item['summary'] !!}</div>
                <a class="btn" href="{{ route('courses.class', ['id' => $item['id']]) }}"></a>
            </div>
        </div>
    </div>
</div>
@include('layouts.logout')
</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/jquery.mCustomScrollbar.concat.min.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript" src="{{ asset(elixir('js/reflection.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
(function($){
    $(window).load(function(){
        $(".mp").mCustomScrollbar({
            callbacks:{
                onScroll:function(){
                    onScrollCallback();
                },
                onTotalScroll:function(){
                    onTotalScrollCallback();
                },
                onTotalScrollOffset:40,
                onTotalScrollBack:function(){
                    onTotalScrollBackCallback();
                },
                onTotalScrollBackOffset:20
            }
        });
    });
})(jQuery);
</script>
@endsection