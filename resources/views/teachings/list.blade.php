@extends('layouts.main')

@section('title', '教学课件')

@section('body')
<body class="body-bg02">

<<div class="stage-detail">
	
	<div class="center prel">
		
		<div class="logo"></div>
		
		<div class="classdetail-center">
			
			<div id="carousel-generic" class="carousel slide" data-ride="">
                <div class="carousel-inner">
                    @foreach($items as $key => $item)
                    <div class="item @if(0 === $key) active @endif">
                        <label>{{ $item['title'] }}</label>
                        <div class="txt">
                            {!! $item['summary'] !!}
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
		</div>
		
	</div>
	
</div>

</body>
@endsection

@section('script')
<script type="text/javascript">
$(function(){
    $('#carousel-generic').carousel({
       pause: true,
       interval: false
    })
})

$(document).keydown(function(){
    if (event.keyCode==37){
        $('#carousel-generic').carousel('prev')
    }
    
    if (event.keyCode==38){
        $('#carousel-generic').carousel('prev')
    }
    
    if (event.keyCode==39){
        $('#carousel-generic').carousel('next')
    }
    
    if (event.keyCode==40){
        $('#carousel-generic').carousel('next')
    }
});
</script>
@endsection