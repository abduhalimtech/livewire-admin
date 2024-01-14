<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/redder.jpg" class="header-logo" style="height:100% !important" />
            <span class="logo-name">{{ config('app.name') }}</span>
        </a>
      </div>
      <ul class="sidebar-menu">

        <li class="menu-header">Main</li>
        <li class="dropdown {{ request()->is('admin/dashboard*') ? 'active' : ''  }}">
          <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>


      </ul>
    </aside>
</div>
