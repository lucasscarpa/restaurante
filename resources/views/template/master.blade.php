<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="token" content="{{ csrf_token() }}">

        <title>Alvenaria Estrutural</title>

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300" />
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/font-awesome.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/libs/datepicker.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('cube/css/compiled/theme_styles.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}" />
        @yield('style')
    </head>

    <body>
        @yield('content-master')

		<script>
			BASE_URL = '{{ url('/') }}';
		</script>
        <script src="{{ url('cube/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.nanoscroller.min.js') }}"></script>
        <script src="{{ url('cube/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('cube/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ url('cube/js/bootstrap-datepicker.pt-BR.js') }}"></script>
        <script src="{{ url('cube/js/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('cube/js/jquery.dataTables.bootstrap.js') }}"></script>
        <script src="{{ url('cube/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        <script src="{{ url('js/custom.js') }}"></script>
        <script src="{{ url('js/fornecedor.js') }}"></script>
        @yield('script')
    </body>

</html>
