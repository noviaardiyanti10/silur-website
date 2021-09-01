<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="{{ url('/home') }}" class="logo"><b style=" font-size: 25px;">SILUR</b></a>
    <!--logo end-->
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a href="#" class="logout" onclick="logout()">Logout</a></li>
        </ul>
    </div>
</header>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

<script>
    function logout(event){
        confirm('Ingin Logout ?');
        document.getElementById('frm-logout').submit();
    }
</script>