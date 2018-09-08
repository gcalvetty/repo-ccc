@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('auth.titReg')</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">@lang('auth.nom')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ape_paterno') ? ' has-error' : '' }}">
                            <label for="ape1" class="col-md-4 control-label">@lang('auth.ape1')</label>

                            <div class="col-md-6">
                                <input id="ape1" type="text" class="form-control" name="ape1" value="{{ old('ape1') }}" required>

                                @if ($errors->has('ape_paterno'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ape_paterno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ape_materno') ? ' has-error' : '' }}">
                            <label for="ape2" class="col-md-4 control-label">@lang('auth.ape2')</label>

                            <div class="col-md-6">
                                <input id="ape2" type="text" class="form-control" name="ape2" value="{{ old('ape2') }}">

                                @if ($errors->has('ape_materno'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ape_materno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">@lang('auth.mail')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">@lang('auth.clvCnf')</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('tipo_Usu') ? ' has-error' : '' }}">
                            <label for="rol" class="col-md-4 control-label">@lang('auth.tUsu')</label>

                            <div class="col-md-6">
                                <select class="form-control" id="tipo_Usu" name='tipo_Usu'>                                    
                                    <option value="Dir">Director</option>
                                    <option value="Prof">Profesor</option>
                                    <option value="Cont" class="hidden">Contador</option>
                                    <option value="Secr">Secretaría</option>
                                    <option value="Rege">Regencia</option>
                                    <option value="JPer" class="hidden">Personal de planta</option>
                                </select>

                                @if ($errors->has('tipo_Usu'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tipo_Usu') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>    


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('auth.botReg')
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
