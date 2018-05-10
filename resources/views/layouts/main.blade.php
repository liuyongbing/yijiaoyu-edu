<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset(elixir('css/css.css')) }}" rel="stylesheet">
    <link href="{{ asset(elixir('css/bootstrap.css')) }}" rel="stylesheet">
    @yield('style')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
@yield('body')

<!-- Scripts -->
<script type="text/javascript" src="{{ asset(elixir('js/jquery-3.2.1.min.js')) }}"></script>
<script type="text/javascript" src="{{ asset(elixir('js/bootstrap.min.js')) }}"></script>
@yield('script')
</html>