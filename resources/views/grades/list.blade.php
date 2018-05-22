@extends('layouts.main')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset(elixir('css/jquery.vm-carousel.css')) }}{{ $STATIC_VERSION }}">
    <link rel="stylesheet" href="{{ asset(elixir('css/bootstrap.css')) }}{{ $STATIC_VERSION }}" />
    <link rel="stylesheet" href="{{ asset(elixir('css/css.css')) }}{{ $STATIC_VERSION }}" />

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
                            <img src="{{ $item['image_url'] }}" />
                        </a>
                        <img class="undis" src="{{ $item['image_url'] }}" />
                    </li>
                @endforeach
                </ul>
            </div>
        </div>

    </div>

</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/jquery-3.2.1.min.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript" src="{{ asset(elixir('js/bootstrap.min.js')) }}{{ $STATIC_VERSION }}"></script>
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