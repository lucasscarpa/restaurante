<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teste') }}</title>

    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/timeline.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
@yield('body')

<script src="{{ secure_asset("js/app.js") }}"></script>
<script src="{{ secure_asset("js/Chart.js") }}"></script>
<script src="{{ secure_asset("js/admin.js") }}"></script>
</body>
</html>