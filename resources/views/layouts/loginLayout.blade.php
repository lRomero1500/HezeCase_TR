<!DOCTYPE html>
<html lang="es-es">
<head>
    <title>{!! $title_page !!} :: Hezecase PMLite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="token" content="{{ csrf_token() }}">
    <base href="{!! URL::to('/').'/' !!}"/>
    <link href="{{ asset('css/layout_session.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    @yield('headers')
</head>
<body style="text-align: center">
<div class="contenedor">
    @yield('content')
</div>

</body>
@yield('scripts')
</html>