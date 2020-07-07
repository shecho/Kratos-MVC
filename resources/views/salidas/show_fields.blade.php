<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $salida->name }}</p>
</div>

<!-- Document Field -->
<div class="form-group">
    {!! Form::label('document', 'Document:') !!}
    <p>{{ $salida->document }}</p>
</div>

<!-- Temperature Field -->
<div class="form-group">
    {!! Form::label('temperature', 'Temperature:') !!}
    <p>{{ $salida->temperature }}</p>
</div>

<!-- Visitdate Field -->
<div class="form-group">
    {!! Form::label('visitDate', 'Visitdate:') !!}
    <p>{{ $salida->visitDate }}</p>
</div>

<!-- Visittime Field -->
<div class="form-group">
    {!! Form::label('visitTime', 'Visittime:') !!}
    <p>{{ $salida->visitTime }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $salida->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $salida->updated_at }}</p>
</div>

