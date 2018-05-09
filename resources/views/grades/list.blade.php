@extends('layouts.main')

@section('style')
<link href="{{ asset(elixir('css/jquery.vm-carousel.css')) }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

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
                        <img src="{{ $item['image_url'] }}" >
                        <img class="undis" src="{{ $item['image_url'] }}" >
                    </li>
                @endforeach
                </ul>
            </div>
        </div>

    </div>

</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/jquery.vm-carousel.js')) }}"></script>
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