<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $visita->name }}</p>
</div>

<!-- Document Field -->
<div class="form-group">
    {!! Form::label('document', 'Document:') !!}
    <p>{{ $visita->document }}</p>
</div>

<!-- Temperature Field -->
<div class="form-group">
    {!! Form::label('temperature', 'Temperature:') !!}
    <p>{{ $visita->temperature }}</p>
</div>

<!-- Visitdate Field -->
<div class="form-group">
    {!! Form::label('visitDate', 'Visitdate:') !!}
    <p>{{ $visita->visitDate }}</p>
</div>

<!-- Visit-Time Field -->
<div class="form-group">
    {!! Form::label('visit-time', 'Visit-Time:') !!}
    <p>{{ $visita->visit-time }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $visita->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $visita->updated_at }}</p>
</div>

