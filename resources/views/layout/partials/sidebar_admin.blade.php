<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <h1 class="sidebar-logo-text">RENTAL</h1>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title m-0">
                    <h6>Home</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/index_admin') ? 'active' : '' }}"
                        href="{{ url('admin/index_admin') }}"><i class="fe fe-grid "></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <h6>Content</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/cars*') ? 'active' : '' }}"
                        href="{{ url('admin/cars') }}"><i class="fa-solid fa-car"></i> <span>Manage Cars</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/users') ? 'active' : '' }}"
                        href="{{ url('admin/users') }}"><i class="fa-solid fa-users"></i> <span>Customers</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/bookingcustomer*') ? 'active' : '' }}"
                        href="{{ url('admin/bookingcustomer') }}"><i class="fa-solid fa-calendar-check"></i> <span>Booking Customer</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/reports') ? 'active' : '' }}"
                        href="{{ url('admin/reports') }}"><i class="fa-solid fa-book"></i> <span>Reports</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/contact-messages*') ? 'active' : '' }}"
                        href="{{ url('admin/contact-messages') }}"><i class="fa-solid fa-envelope"></i> <span>Contact Messages</span></a>
                </li>
                <li class="menu-title">
                    <h6>Settings</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/admin*') ? 'active' : '' }}"
                        href="{{ url('admin/admin') }}"><i class="fa-solid fa-user"></i> <span>Profile</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/signin') ? 'active' : '' }}"
                        href="{{ url('admin/signin') }}"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Add this CSS to your stylesheet or in a <style> tag -->
<style>
.sidebar-logo-text {
    color: aliceblue;
    font-size: 37px;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'ArtBrush', sans-serif;
}
</style>
