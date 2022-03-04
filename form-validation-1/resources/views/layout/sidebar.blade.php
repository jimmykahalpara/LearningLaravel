<!-- Sidebar -->
<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <a href="#">@yield('sidebar_title')</a>
            </div>
        </div>
        <li><a href="{{ route('user.index') }}">Home</a></li>
        <li><a href="{{ route('user.new.form') }}">Create User</a></li>
        
    </ul>
</nav>
<!-- /#sidebar-wrapper -->