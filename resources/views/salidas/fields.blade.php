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

<!-- Visittime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visitTime', 'Visittime:') !!}
    {!! Form::text('visitTime', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('salidas.index') }}" class="btn btn-default">Cancel</a>
</div>
