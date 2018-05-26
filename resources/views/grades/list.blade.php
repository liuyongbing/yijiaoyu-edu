@extends('layouts.main')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset(elixir('css/jquery.vm-carousel.css')) }}{{ $STATIC_VERSION }}">

<style type="text/css">
h2 {
    margin-bottom: 40px;
    margin-top: 40px;
}
.vmc-centered{padding: 30px 0;}
.vmc-centered img {transition: all 0.3s ease;}
.vmc-centered .vmc_active img {transform: scale(1.2);}
</style>
@endsection

@section('title', '卡牌列表')

@section('body')
<body class="body-bg03">
	<div class="kp">
		<div class="center prel">
			<div class="logo pabs"></div>
		</div>
		
		<div class="htmleaf-container">
            <div class="container">
                <ul class="vmcarousel-centered vmc-centered">
                @foreach($items as $item)
                    <li>
                        <label>{{ $item['title'] }}</label>
                        <a href="{{ route('courses.index', ['grade_id' => $item['id']]) }}">
                            <img class="reflect" src="{{ $item['image_url'] }}" >
                            <img class="undis reflect" src="{{ $item['image_url'] }}" >
                        </a>
                    </li>
                @endforeach
                  <!--li>
                    <label>入门活动</label>
                    <img class="reflect" src="images/k01.png" >
                    <img class="undis reflect" src="images/sk01.png" >
                  </li-->
               </ul>
            </div>
        </div>
    </div>
</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/modernizr.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript" src="{{ asset(elixir('js/jquery.vm-carousel.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
    jQuery(function($){
    $('.vmcarousel-centered').vmcarousel({
            centered: true,
            start_item: 2,
            autoplay: false,
            infinite: false
        });
    });
</script>
@endsection