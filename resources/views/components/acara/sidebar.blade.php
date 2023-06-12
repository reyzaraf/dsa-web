<div class="deznav">
    <div class="deznav-scroll">
        <a href="#" class="add-menu-sidebar">DSA POLDA SULUT</a>
        <ul class="metismenu" id="menu">
            @can('systems control')
                <li
                    class="{{ request()->routeIs(['admin.users.*', 'admin.permissions.*', 'admin.roles.*']) ? 'mm-active' : '' }}">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Super Admin Setting</span>
                    </a>
                    <ul aria-expanded="false">
                        @can('users read')
                            <li class="{{ request()->routeIs('admin.users.index') ? 'mm-active' : '' }}">
                                <a href="{{ route('admin.users.index') }}"
                                    class="{{ request()->routeIs(['admin.users.index', 'admin.users.*']) ? 'mm-active' : '' }}">
                                    Data Pengguna
                                </a>
                            </li>
                        @endcan
                        @can('permissions read')
                            <li class="{{ request()->routeIs('admin.permissions.index') ? 'mm-active' : '' }}">
                                <a href="{{ route('admin.permissions.index') }}"
                                    class="{{ request()->routeIs(['admin.permissions.index', 'admin.permissions.*']) ? 'mm-active' : '' }}">
                                    Permissions
                                </a>
                            </li>
                        @endcan
                        @can('roles read')
                            <li class="{{ request()->routeIs('admin.roles.index') ? 'mm-active' : '' }}">
                                <a href="{{ route('admin.roles.index') }}"
                                    class="{{ request()->routeIs(['admin.roles.index', 'admin.roles.*']) ? 'mm-active' : '' }}">
                                    Roles
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li
                class="{{ request()->routeIs(['admin.blgos.*', 'admin.articles.*']) ? 'mm-active' : '' }}">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Artikel</span>
                </a>
                <ul aria-expanded="false">
                    @can('blogs read')
                            <li>
                                <a href="{{ route('admin.articles.draft') }}"
                                    class="{{ request()->routeIs(['admin.articles.draft'    ]) ? 'mm-active' : '' }}">Artikel Baru / Belum Disetujui</a>
                            </li>
                    @endcan
                    @can('blogs read')
                            <li>
                                <a href="{{ route('admin.articles.index') }}"
                                    class="{{ request()->routeIs(['admin.articles.index'    ]) ? 'mm-active' : '' }}">Artikel Disetujui</a>
                            </li>
                    @endcan
                    @can('blogs read')
                            <li>
                                <a href="{{ route('admin.articles.decline') }}"
                                    class="{{ request()->routeIs(['admin.articles.decline'  ]) ? 'mm-active' : '' }}">Artikel Ditolak</a>
                            </li>
                    @endcan
                    
                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="app-calender.html">Calendar</a></li> --}}
                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
            <!-- Artikel -->
            <li
                class="{{ request()->routeIs(['admin.blogs.*', 'admin.articles.*']) ? 'mm-active' : '' }}">
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Berita</span>
                </a>
                <ul aria-expanded="false">
                    @can('blogs read')
                        @if (Route::has('admin.blogs.draft'))
                            <li>
                                <a href="{{ route('admin.blogs.draft') }}"
                                    class="{{ request()->routeIs(['admin.blogs.draft']) ? 'mm-active' : '' }}">Berita Baru / belum disetujui</a>
                            </li>
                        @endif
                    @endcan
                    @can('blogs read')
                        @if (Route::has('admin.blogs.index'))
                            <li>
                                <a href="{{ route('admin.blogs.index') }}"
                                    class="{{ request()->routeIs(['admin.blogs.index']) ? 'mm-active' : '' }}">Berita Disetujui</a>
                            </li>
                        @endif
                    @endcan
                    @can('blogs read')
                        @if (Route::has('admin.blogs.decline'))
                            <li>
                                <a href="{{ route('admin.blogs.decline') }}"
                                    class="{{ request()->routeIs(['admin.articles.decline']) ? 'mm-active' : '' }}">Berita Ditolak</a>
                            </li>
                        @endif
                    @endcan
                    <!-- @can('blogs read')
                        @if (Route::has('admin.categories.index'))
                            <li>
                                <a href="{{ route('admin.categories.index') }}"
                                    class="{{ request()->routeIs(['admin.categories.index']) ? 'mm-active' : '' }}">Category</a>
                            </li>
                        @endif
                    @endcan -->
                    
            </li>
        </ul>
        <div class="copyright">
            <!-- <p><strong>Acara Ticketing Dashboard</strong> © 2021 All Rights Reserved</p> -->
            <p>Made with <span class="heart"></span>Duta Sulut Aman</p>
        </div>
    </div>
</div>
