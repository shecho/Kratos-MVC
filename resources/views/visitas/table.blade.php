<div class="table-responsive">
    <table class="table" id="visitas-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Document</th>
        <th>Temperature</th>
        <th>Visitdate</th>
        <th>Visit-Time</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($visitas as $visita)
            <tr>
                <td>{{ $visita->name }}</td>
            <td>{{ $visita->document }}</td>
            <td>{{ $visita->temperature }}</td>
            <td>{{ $visita->visitDate }}</td>
            <td>{{ $visita->visitTime }}</td>
                <td>
                    {!! Form::open(['route' => ['visitas.destroy', $visita->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('visitas.show', [$visita->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('visitas.edit', [$visita->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
