<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Document Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document', 'Document:') !!}
    {!! Form::text('document', null, ['class' => 'form-control']) !!}
</div>

<!-- Temperature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperature', 'Temperature:') !!}
    {!! Form::text('temperature', null, ['class' => 'form-control']) !!}
</div>

<!-- Visitdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visitDate', 'Visitdate:') !!}
    {!! Form::text('visitDate', null, ['class' => 'form-control','id'=>'visitDate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#visitDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Visit-Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit-time', 'Visit-Time:') !!}
    {!! Form::text('visit-time', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('visitas.index') }}" class="btn btn-default">Cancel</a>
</div>
