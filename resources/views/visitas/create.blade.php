@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Visita
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'visitas.store']) !!}

                        @include('visitas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
