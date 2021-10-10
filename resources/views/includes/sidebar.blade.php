<div class="sidebar">
            <div class="sidebar-brand">
                <img
                    src="/assets/img/logo.png"
                    width="70px"
                    height="50px"
                    alt=""
                />
            </div>

            <div class="sidebar-menu">
                <ul id="navMenus">
                    <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                        <a href="{{ route('admin-dashboard') }}">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="attendance.html">
                            <span>Attendance</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('admin/visiting*')) ? 'active' : '' }}">
                        <a href="{{ route('visiting.index') }}">
                            <span>Visiting</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('admin/user*')) ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="product.html">
                            <span>Product</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('admin/store*')) ? 'active' : '' }}">
                        <a href="{{ route('store.index') }}">
                            <span>Store</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
