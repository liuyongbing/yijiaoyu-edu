@extends('layouts.main_town')

@section('title', '色带列表')

@section('body')

<body class="body-bg03">
<div class="kp">
    <div class="center prel">
        <div class="logo pabs"></div>
    </div>

    <div class="htmleaf-container">
        <div class="container">
            <div class="stage-list">
            @if (!empty($items))
                @foreach($items as $key => $item)
                <a style="padding-top: {{ 120-20*$key }}px" href="{{ route('courses.show', ['id' => $item['id']]) }}">
                    <span>{{ $item['title'] }}</span>
                    <img src="{{ $item['image_url'] }}" />
                </a>
                @endforeach
            @else
                <h1 style="color:#FFF">即将上线</h1>
            @endif
            </div>
        </div>
    </div>
</div>

@include('layouts.logout')
</body>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/reflection01.js')) }}{{ $STATIC_VERSION }}"></script>
@endsection
