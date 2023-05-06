<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center"></div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name">{{auth()->user()->first_name.' '.auth()->user()->last_name}}</span>
                                <span class="user-status text-muted">
                                    @switch(auth()->user()->role)
                                        @case('operator')
                                        {{'اپراتور'}}
                                        @break
                                        @case('admin')
                                        {{'مدیر سايت'}}
                                        @break
                                    @endswitch
                                </span>
                            </div>
                            <span><img class="round"
                                       @if(auth()->user()->image_url != null)
                                       src="{{asset(auth()->user()->image_url)}}"
                                       @else
                                       src="{{asset('default_avatar.png')}}"
                                       @endif

                                       alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu pb-0">
                            <a class="dropdown-item" href="#"><i class="bx bx-edit mr-50"></i>تنظیمات</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-user mr-50"></i> ویرایش پروفایل</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock mr-50"></i> تغییر رمز عبور</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="bx bx-power-off mr-50"></i> خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

