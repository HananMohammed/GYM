<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{route('admin.dashboard')}}" class="brand-logo">
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_sud6JL.json"  background="transparent"  speed="1"  style="width: 130px; height: 200px;margin-top: 50px;"  loop controls autoplay></lottie-player>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{route('admin.profile')}}" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span class="menu-text">Profile</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-telegram-logo"></i>
                        <span class="menu-text">@lang('sidebar.homepage')</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">@lang('sidebar.homepage')</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{route('admin.sliders.edit')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">@lang('sidebar.slider')</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Notes</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Remarks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-laptop"></i>
                        <span class="menu-text">@lang('sidebar.about')</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text"></span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{route('admin.about.edit')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">@lang('about.about')</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Reports</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Apps</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Downloads</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Tasks</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Events</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-browser-2"></i>
                        <span class="menu-text">Reports</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Reports</span>
												</span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Cases</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Reports</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Calendar</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="#" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">FAQ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link">
                        <i class="menu-icon flaticon2-console"></i>
                        <span class="menu-text">Console</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="javascript:;" class="menu-link">
                        <i class="menu-icon flaticon2-console"></i>
                        <span class="menu-text">System</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#" class="menu-link">
                        <i class="menu-icon flaticon2-graph-1"></i>
                        <span class="menu-text">Logs</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
<!--end::Aside-->
