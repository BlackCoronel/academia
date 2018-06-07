@extends('admin.panel')

@section('content')
    <div class="container modal-content" style="margin-top: 50px; padding:50px;">
        <div class="col-md-8">
            <h3 style="margin-bottom: 25px;"><i class="fa fa-book"></i>Nuevo Curso</h3>
            {!! Form::open([ 'method' => 'POST','url' =>'/registro_c']) !!}
            <div class="form-group row">

                {{  Form::label('Curso',null,['class'=> 'col-md-4 col-form-label text-md-right']) }}

                <div class="col-md-6">

                    {{  Form::text('curso',null, ['class' => 'form-control']) }}

                 </div>
            </div>
            <div class="form-group row">

                 {{  Form::label('Profesor',null,['class'=> 'col-md-4 col-form-label text-md-right']) }}

            <div class="col-md-6">

              <select>

                @foreach($profesores as $campos)

                    <option>{{ $campos->nombre }} {{ $campos->apellidos }}-{{ $campos->dni }}</option>

                @endforeach

                </select>

            </div>


            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection