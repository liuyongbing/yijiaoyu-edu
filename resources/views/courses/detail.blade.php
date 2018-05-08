@extends('layouts.main')

@section('title', '课程简介')

@section('body')

<body class="body-bg01">

<div class="stage-detail">
    
    <div class="center">
    
        <div class="step">
            <a href="javascript:void(0);"> < 首页</a>
            <a href="javascript:void(0);"> < 明星课时卡</a>
            <a href="javascript:void(0);"> < 白带</a>
        </div>
        
        <div class="detail-center">
            
            <div class="kp l"><img src="{{ $item['image_url'] }}"></div>
            <div class="txt l">
                <b>{{ $item['title'] }}课程简介</b>
                <p>{{ $item['summary'] }}</p>
                <a class="btn" href="{{ route('courses.class', ['id' => $item['id']]) }}"></a>
            </div>
            
            <div class="mp r">
                <a class="n02" href="javascript:void(0);"><em></em><img src="/images/n02.png"></a>
                <a class="n03" href="javascript:void(0);"><em></em><img src="/images/n03.png"></a>
                <a class="n04" href="javascript:void(0);"><em></em><img src="/images/n04.png"></a>
            </div>
            
        </div>
            
    </div>
    
</div>

</body>
@endsection