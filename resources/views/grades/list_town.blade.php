@extends('layouts.main_town')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset(elixir('town/css/jquery.vm-carousel.css')) }}{{ $STATIC_VERSION }}">
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
                        <img class="reflect" src="{{ $item['image_url'] }}" width="180" />
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>

@include('layouts.logout')
</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('town/js/modernizr.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript" src="{{ asset(elixir('town/js/reflection.js')) }}{{ $STATIC_VERSION }}"></script>
<script src="{{ asset(elixir('town/js/jquery.vm-carousel.js')) }}{{ $STATIC_VERSION }}"></script>
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
@endsection