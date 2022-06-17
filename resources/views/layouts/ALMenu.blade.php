<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('autotabel') }}" class="nav-link {{ Request::is('autotabel*') ? 'active' : '' }}">
        <i class="fas fa-school"></i>
        <p>Главная</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('shtat') }}" class="nav-link {{ Request::is('shtat*') ? 'active' : '' }}">
        <i class="fa fa-users"></i>
        <p>Штат</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tabel') }}" class="nav-link {{ Request::is('tabel*') ? 'active' : '' }}">
        <i class="fa fa-table" aria-hidden="true"></i>
        <p>Табель</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tabelHistory') }}" class="nav-link {{ Request::is('tabelHistory*') ? 'active' : '' }}">
        <i class="fa fa-history" aria-hidden="true"></i>
        <p>Готовые табели</p>
    </a>
</li>
