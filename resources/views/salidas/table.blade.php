<div class="table-responsive">
    <table class="table" id="salidas-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Document</th>
        <th>Temperature</th>
        <th>Visitdate</th>
        <th>Visittime</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($salidas as $salida)
            <tr>
                <td>{{ $salida->name }}</td>
            <td>{{ $salida->document }}</td>
            <td>{{ $salida->temperature }}</td>
            <td>{{ $salida->visitDate }}</td>
            <td>{{ $salida->visitTime }}</td>
                <td>
                    {!! Form::open(['route' => ['salidas.destroy', $salida->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('salidas.show', [$salida->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('salidas.edit', [$salida->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
