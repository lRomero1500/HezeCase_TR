<!DOCTYPE html>
<html lang="es-es">
<head>
    <title>{!! $title_page !!} :: Hezecase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="token" content="{{ csrf_token() }}">
    <base href="{!! URL::to('/').'/' !!}"/>
    @yield('headers')
</head>
<body>
<header class="headerFrontEnd">
    <div class="ContentLeftlogo">
        <img class="ContentlogoImg" src="Img/Logo_Header_arcia.png">
    </div>
    <div class="ContentRightInfoMenuHeader">
        <div class="ContentMenuheader">
            <nav class="nav">
                <li>
                    <div class="IconoMenuBar">
                        <a href="" id="iconoMenuTop">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                        </a>
                    </div>
                    <ul>
                        <li class="ContentNavheader">
                            <div class="Flecha"></div>
                            <ul class="Navheader">

                            </ul>
                        </li>
                    </ul>
                </li>
            </nav>
        </div>
        <div class="Avatar">
            <h1>

            </h1>
        </div>
        <div class="Nombre">
            <h5>

            </h5>
        </div>
    </div>
</header>
<div style="width: 100%;position: relative;	top:3.8em">
    <div class="ContenedorMenuLateral">
        <div class="ContentMenuLat">
            <div class="ContentLatNav">
                <nav class="LatNav">

                </nav>
            </div>
        </div>
    </div>
    <div class="ContenedorAreaTrabajo">
        @yield('content')
    </div>

</div>

<footer style="position: absolute!important" class="FooterFrontEnd">
    <div class="ContenedorTextDerechosFooter">
        <p class="TextDerechosFooter">&copy {!! date('Y') !!} Creado por Grupo Arcia S.A.S- Prohibida su reproducción
            total o parcial | <a href="https://arciait.com" class="red">Arciait</a></p>
    </div>
    <div class="ContenedorImgFooter">
        <img class="imgFooterLogo" src="Img/Logo_Lateral_hezecase.png">
    </div>
</footer>
<div id="Confirm" style="display: none" title="Confirmacion">¿Desea eliminar este registro?</div>
</body>
@yield('scripts')
@yield('scriptsEMB')
</html>