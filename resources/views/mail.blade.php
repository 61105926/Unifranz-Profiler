@extends('layouts.pdf')
@section('content')
<div>
    <h2>EL estudiante ya finalizo su Test Vocacional.</h2>
    <table class="table table-bordered table-striped table-sm">
        <h4>UNIDAD EDUCATIVA:<span>{{$school}}</span></h4>
        <h4>NOMBRE(S):<span>{{$name}}</span></h4>
        <h4>APELLIDO(S):<span>{{$last_name}}</span></h4>
        <h4>CORREO:<span>{{$emailEst}}</span></h4>
    </table>
</div>
<footer>
    <p>&copy; {{now()->year}} - Unifranz | Innovación en educación</p>
</footer>
@endsection