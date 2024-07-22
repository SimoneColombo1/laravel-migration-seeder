@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Homepage

    </h1>
@foreach ($trains as $train )
    {{$train -> Azienda;}}
    {{$train -> Stazione_di_partenza;}}
    {{$train -> Stazione_di_arrivo;}}
    {{$train -> Orario_di_partenza;}}
    {{$train -> Data_di_partenza;}}
    {{$train -> Data_di_arrivo;}}
    {{$train -> Orario_di_arrivo;}}
    {{$train -> Numero_carrozze;}}
    {{$train -> In_orario;}}
    {{$train -> Cancellato;}}
@endforeach
@endsection
