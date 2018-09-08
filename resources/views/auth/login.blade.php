@extends('layouts_sisccc.pagsis_login')

@section('titulo')
@lang('auth.titLogin')
@endsection

@section('sis_contenido')
<div class="container">
    <div class="login-box col-md-6 col-md-offset-3 ">
        <div class="login-logo">
            <a href="{{ url('/') }}" class="logo">
                <span class="logo-lg">{{ config('app.name', 'CCC-SIS') }}</span>
                <span class="logo-mini">{{ config('app.name', 'CCC') }}</span>
            </a>
        </div>
        <div class="login-box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">@lang('auth.titLogin')</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('acceder') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">@lang('auth.mail')</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus btn >

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">@lang('auth.clv')</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">@lang('auth.botRec')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="col-md-6 text-center">
                                            <a href="{{ route('homeCCC') }}" target="_blank" >
                                                <button type="button" class="btn btn-success" >
                                                    <i class="fa fa-reply"></i> @lang('auth.botVolIni')
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-external-link"></i> <b>@lang('auth.botAcs')</b>
                                            </button>
                                        </div>
                                        <a class="btn btn-link " href="{{ url('/password/reset') }}">
                                            @lang('auth.botOlvCnt')
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
</div>       
@endsection
