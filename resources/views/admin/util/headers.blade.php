
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{url('/admins.blade.php.php')}}" class="text-nowrap logo-img">
                        <img src="{{url('/admin/assets/images/logos/dark-logo.svg')}}" width="180" alt=""/>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">DOANH THU</span>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/dashboard'" aria-expanded="false">
                <span>
                  <i class="ti ti-calculator"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">KHO</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/storage/count_import'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-building-warehouse"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link"  onclick="location.href='/admin/storage/import_items'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-forklift"></i>
                </span>
                            <span class="hide-menu">PHIẾU NHẬP KHO</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4 "></i>
                        <span class="hide-menu">ĐƠN HÀNG</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/delivery/count_item'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-basket"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ ĐƠN</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/delivery/count_product'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-brand-appgallery"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ SẢN PHẨM </span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                         <a class="sidebar-link"  onclick="location.href='/admin/delivery/count_table'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-chair-director"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ BÀN</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">SẢN PHẨM</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/product/count'"
                           aria-expanded="false">
                <span>
                  <i class="ti ti-coffee"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link"  onclick="location.href='/admin/product/product_formula'"
                           aria-expanded="false">
                <span>
                 <i class="ti ti-circle-plus"></i>
                </span>
                            <span class="hide-menu">PHIẾU CÔNG THỨC SẢN PHẨM</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">TÀI KHOẢN</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" onclick="location.href='/admin/account/update_account'"
                           aria-expanded="false">
                <span>
                 <i class="ti ti-edit"></i>
                </span>
                            <span class="hide-menu"> CẬP NHẬT</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link"  onclick="location.href='/admin/account/count_account'"
                           aria-expanded="false">
                <span>
                 <i class="ti ti-user-shield"></i>
                </span>
                            <span class="hide-menu">THỐNG KÊ</span>
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Session::get('page')=="cms")
                        @php $active="active" @endphp
                    @else
                        @php $active="" @endphp
                    @endif
                    <li class="sidebar-item">
                        <a class="sidebar-link{{$active}}"  onclick="location.href='/admin/cms'"
                           aria-expanded="false">
                <span>
                <i class="ti ti-page-break"></i>
                </span>
                            <span class="hide-menu">QUYỀN </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

