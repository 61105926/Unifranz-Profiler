@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perfilador Unifranz') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                 <div class="card-footer">
                    <div class="small-box bg-info">
                        <div class="inner">
                            @foreach($numero as $numeros)
                                <h3 class="center">{{$numeros->numero}}</h3>
                                <p>Codigo Actual</p>
                                </div>
                                <div class="icon">
                                <i class="ion ion-bag"></i>
                                </div>
                                </div>
                            @endforeach

                        <form  method="put">
                        @csrf
                        
                        <input type="text" name="numero" id="numero" placeholder="ACTULIZAR CODIGO" class="form-control">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary">ACTULIZAR</button>
                            </span>
                     </form>
                     
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection