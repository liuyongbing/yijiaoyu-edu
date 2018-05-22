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
            <a href="javascript:void(0);"> < 首页</a>
            <a href="javascript:void(0);"> < 明星课时卡</a>
            <a href="javascript:void(0);"> < 白带</a>
        </div>
        
        <div class="detail-center">
            
            <div class="kp l"><span><img src="{{ $item['image_url'] }}"></span></div>
            <div class="txt l">
                <b>{{ $item['title'] }}课程简介</b>
                <p>{{ $item['summary'] }}</p>
                <a class="btn" href="{{ route('courses.class', ['id' => $item['id']]) }}"></a>
            </div>
				
            <div class="mp r">
                <a class="n02" href="javascript:void(0);"><em></em><img src="/images/n02.png"></a>
                <a class="n03" href="javascript:void(0);"><em></em><img src="/images/n03.png"></a>
                <a class="n04" href="javascript:void(0);"><em></em><img src="/images/n04.png"></a>
                <a class="n02" href="javascript:void(0);"><em></em><img src="/images/n02.png"></a>
                <a class="n03" href="javascript:void(0);"><em></em><img src="/images/n03.png"></a>
                <a class="n04" href="javascript:void(0);"><em></em><img src="/images/n04.png"></a>
            </div>
            
        </div>
            
    </div>
    
</div>

</body>
@endsection

@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
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