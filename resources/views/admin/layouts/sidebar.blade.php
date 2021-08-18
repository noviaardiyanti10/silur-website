<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a><img src="assets/img/profil.jpg" class="img-rounded" width="100" height="110"></a>
            </p>
            <h5 class="centered" style="font-size: 18px; color: white; font-weight: bold; font-family: sans-serif;">
                {{ Auth::user()->username }}
            </h5>
            <li class="mt">
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard" style=" color: #a19f9f;"></i>
                    <span style="font-size: 19px; color: #595959; font-weight: bold;">Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fas fa-address-book" style=" color: #595959;"></i>
                    <span style="font-size: 16px; color: #595959; font-weight: bold;">User <span
                            style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="list_pedagang.html" style="font-size: 16px; font-weight: bold;">Data
                            Pedagang</a></li>
                    <li><a href="list_pembeli.html" style="font-size: 16px; font-weight: bold;">Data Pembeli</a>
                    </li>
                    <li><a href="list_admin.html" style="font-size: 16px; font-weight: bold;">Data Admin</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cog" style=" color: #595959;"></i>
                    <span style="font-size: 16px; color: #595959; font-weight: bold;">Setting <span
                            style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('profil.index') }}" style="font-size: 16px; font-weight: bold;">Pengaturan
                            Profil</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
