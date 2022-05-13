@extends('layouts.pdf')
@section('content')

<header>
    <img src="assets/img/test-vocacional.png" alt="" width="179" height="65" class="derecha">
    <img src="assets/img/unifranz.png" alt="" width="179" height="65">
</header>


<div>
    <table class="table table-bordered table-striped table-sm">
        <h4>INFORMACIÓN GENERAL <span class="derecha">{{now()}}</span></h4>
    </table>
    <table class="table table-bordered table-striped table-sm">
        <h4>UNIDAD EDUCATIVA:<span>{{$school}}</span></h4>
        <h4>NOMBRE(S):<span>{{$name}}</span></h4>
        <h4>APELLIDO(S):<span>{{$last_name}}</span></h4>
        <h4>CORREO:<span>{{$emailEst}}</span></h4>
    </table>
</div>
<h2>Felicidades! El test se procesó correctamente.</h2>
<h3 class="main_question">Tus intereses están relacionados con carreras de:</h3>
<div class="form-group radio_questions">

    @if($highScore == 'administrative')
    <label>ADMINISTRACION DE EMPRESAS

    </label>
    <label>ADMINISTRACION HOTELERIA Y TURISMO

    </label>
    <label>CONTABILIDAD

    </label>
    @elseif($highScore=='humanistic')
    <label>PSICOLOGIA

    </label>
    @elseif($highScore=='artistic')
    <label>DISEÑO GRAFICO Y CROSMEDIA

    </label>
    @elseif($highScore=='medicine')
    <label>BIOQUIMICA Y FARMACIA

    </label>
    <label>ENFERMERIA

    </label>
    <label>ODONTOLOGIA

    </label>
    <label>MEDICINA

    </label>
    @elseif($highScore=='engineering')
    <label>INGENIERIA COMERCIAL

    </label>
    <label>INGENIERIA EN SISTEMAS

    </label>
    @elseif($highScore=='science')
    <label>BIOLOGIA

    </label>
    <label>MATEMATICAS

    </label>
    <label>INGENIERIA AGRONOMA

    </label>
    @elseif($highScore=='security')
    <label>DERECHO

    </label>

    @endif


</div>
<h3 class="main_question">Tambien tienes intereses en:</h3>

<div class="form-group radio_questions">

    @if($highScore2 == 'administrative')
    <label>ADMINISTRACION DE EMPRESAS
    </label>
    <label>ADMINISTRACION HOTELERIA Y TURISMO
    </label>
    <label>CONTABILIDAD

    </label>
    @elseif($highScore2 =='humanistic')
    <label>PSICOLOGIA

    </label>
    @elseif($highScore2 =='artistic')
    <label>DISEÑO GRAFICO Y CROSMEDIA

    </label>
    @elseif($highScore2 =='medicine')
    <label>BIOQUIMICA Y FARMACIA

    </label>
    <label>ENFERMERIA

    </label>
    <label>ODONTOLOGIA

    </label>
    <label>MEDICINA

    </label>
    @elseif($highScore2 =='engineering')
    <label>INGENIERIA COMERCIAL

    </label>
    <label>INGENIERIA EN SISTEMAS

    </label>
    @elseif($highScore2 =='science')
    <label>BIOLOGIA

    </label>
    <label>MATEMATICAS

    </label>
    <label>INGENIERIA AGRONOMA

    </label>
    @elseif($highScore2 =='security')
    <label>DERECHO

    </label>
    @endif
</div>

<div>
    <table class="table table-bordered table-striped table-sm">
        <div align="center">
            <img src="{{$chart}}">
        </div>
    </table>
</div>

<footer>
    <p>&copy; {{now()->year}} - Unifranz | Innovación en educación</p>
</footer>
@endsection