<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('autotabel') }}" class="brand-link">
        <img src="{{asset('public/images/logo.png')}}"
             alt="AutoTab"
             class="brand-image elevation-3" style="border-radius: 10px">
        <span class="brand-text font-weight-light">AutoTab</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.ALMenu')
            </ul>
        </nav>
    </div>

</aside>
