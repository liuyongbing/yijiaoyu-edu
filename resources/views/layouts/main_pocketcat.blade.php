<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="bookmark" href="/favicon.ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="nfOGT6TmKZbUOnq11spye7M7GYONJ9SSoyNufR8B">

    <title>卡牌列表</title>

    <!-- Styles -->
    <link href="pocketcat/css/css.css?v=20180910131915" rel="stylesheet">
    <link href="pocketcat/css/bootstrap.css?v=20180910131915" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="pocketcat/css/jquery.vm-carousel.css?v=20180910131915">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"nfOGT6TmKZbUOnq11spye7M7GYONJ9SSoyNufR8B"}    
	</script>
</head>

@yield('body')

<!-- Scripts -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js?v=20180910131915"></script>
<script type="text/javascript" src="js/bootstrap.min.js?v=20180910131915"></script>
<script type="text/javascript" src="js/modernizr.js?v=20180910131915"></script>
<script type="text/javascript" src="js/reflection.js?v=20180910131915"></script>
<script type="text/javascript" src="js/jquery.vm-carousel.js?v=20180910131915"></script>
<script type="text/javascript">
    jQuery(function($){
        $('.vmcarousel-centered').vmcarousel({
            centered: true,
            start_item: 1,
            autoplay: false,
            infinite: false
        });
        //$('.vmc-arrow-left, .vmc-arrow-right').show();
    });
</script>
</html>