@extends('layouts.main_pocketcat')

@section('body')

<body class="body-bg03">
<div class="kp">
    <div class="htmleaf-container">
        <div class="container">
            <ul class="vmcarousel-centered vmc-centered">
            @foreach($items as $item)
                <li>
                    <a href="{{ route('courses.index', ['grade_id' => $item['id']]) }}">
                        <img class="reflect" src="{{ $item['image_url'] }}" width="160" />
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
</body>
@endsection