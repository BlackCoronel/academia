@extends('admin.panel')

@section('content')
    <div class="container modal-content" style="margin-top: 50px; padding:50px;">
        <div class="col-md-8">
            <h3 style="margin-bottom: 25px;"><i class="fa fa-book"></i> - Nuevo Curso</h3>
            {!! Form::open([ 'method' => 'POST','url' =>'/new_curso']) !!}
            <div class="form-group row">
                {{  Form::label('Curso',null,['class'=> 'col-md-4 col-form-label text-md-right']) }}
                <div class="col-md-6">
                    <input type="text" name="nombre" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                {{  Form::label('Profesor',null,['class'=> 'col-md-4 col-form-label text-md-right']) }}
                <div class="col-md-6">
                    <select name="profesor" class="form-control">
                        @foreach($profesores as $campos)
                            <option>{{ $campos->nombre }} {{ $campos->apellidos }}-{{ $campos->dni }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('Curso',null,['class'=> 'col-md-4 col-form-label text-md-right']) }}
                <div class="col-md-6">
                    <select name="curso" class="form-control">
                        @foreach($cursosacademicos as $curso)
                            <option>{{ $curso->nombre_curso}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:20px;">
                {{ Form::submit('crear', ['class' => 'btn btn-primary pull-right']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection