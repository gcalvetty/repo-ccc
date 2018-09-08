
@extends('layouts.app')
@section('sis_contenido')


<ccctab titulo="@lang('auth.titEscr')" nombre="{{ Auth::user()->nombre }}" ></ccctab>

@endsection
