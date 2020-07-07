<li class="{{ Request::is('visitas*') ? 'active' : '' }}">
    <a href="{{ route('visitas.index') }}"><i class="fa fa-edit"></i><span>Visitas</span></a>
</li>

<li class="{{ Request::is('salidas*') ? 'active' : '' }}">
    <a href="{{ route('salidas.index') }}"><i class="fa fa-edit"></i><span>Salidas</span></a>
</li>

