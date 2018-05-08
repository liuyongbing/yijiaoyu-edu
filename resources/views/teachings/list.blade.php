<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.css" />
    <link rel="stylesheet" href="/css/css.css" />
    <title>齐天大圣</title>
</head>
<body class="body-bg02">

<div class="stage-detail">
	
	<div class="center prel">
		
		<div class="logo"></div>
		
		<div class="classdetail-center">
			
			<div id="carousel-generic" class="carousel slide" data-ride="">
                <div class="carousel-inner">
                    @foreach($items as $key => $item)
                    <div class="item @if(0 === $key) active @endif">
                        <label>{{ $item['title'] }}</label>
                        <img src="{{ $item['image_url'] }}">
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

<script>
	
	$(document).keydown(function(event){
			if (event.keyCode==37){
				console.info("左")
				$('#carousel-generic').carousel('prev')
			}
			
			if (event.keyCode==38){
				console.info("上")
			}
			
			if (event.keyCode==39){
				console.info("右")
				$('#carousel-generic').carousel('next')
			}
			
			if (event.keyCode==40){
				console.info("下")
			}
			
			
		});
	
</script>

</html>
