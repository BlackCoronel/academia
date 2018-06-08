@extends('admin.panel')

@section('content')
<div class="container modal-content" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="margin-bottom: 20px;"><h2><i class="fa fa-user" style="margin-right: 5px;"></i>Registro de usuarios</h2></div>
                <div class="card-body">
                    <form method="POST" action="/registro">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("validation.attributes.name")}}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" style="{{$errors->has('name') ? 'border-color:red;' : ''}}" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" style="{{$errors->has('apellidos') ? 'border-color:red;' : ''}}" name="apellidos" value="{{ old('apellidos') }}">
                                @if ($errors->has('apellidos'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" style="{{$errors->has('email') ? 'border-color:red;' : ''}}" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" style="{{$errors->has('dni') ? 'border-color:red;' : ''}}" name="dni" value="{{ old('dni') }}">
                                @if ($errors->has('dni'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" style="{{$errors->has('address') ? 'border-color:red;' : ''}}" name="address" value="{{ old('address') }}">
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.date') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" style="{{$errors->has('date') ? 'border-color:red;' : ''}}" name="date" value="{{ old('date' )}}">
                                @if ($errors->has('date'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="curso" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.curso') }}</label>

                            <div class="col-md-6">
                                <select name="curso" id="" class="form-control" style="{{$errors->has('curso') ? 'border-color:red;' : ''}}">
                                    @foreach($cursos as $curso)
                                        @if($curso->nombre_curso == old('curso'))
                                             <option selected>{{ $curso->nombre_curso }}</option>
                                        @else
                                            <option> {{ $curso->nombre_curso }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('curso'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('curso') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('validation.attributes.rol') }}</label>
                            <div class="col-md-6">
                                <select id="rol" type="text" class="form-control" style="{{$errors->has('rol') ? 'border-color:red;' : ''}}" name="rol" required>
                                @foreach($roles as $rol)
                                        @if($rol->rol == old('rol'))
                                            <option selected>{{ $rol->rol }}</option>
                                        @else
                                            <option> {{ $rol->rol }}</option>
                                        @endif
                                @endforeach
                                </select>
                                @if($errors->has('rol'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    {{ __('validation.attributes.register') }}
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


