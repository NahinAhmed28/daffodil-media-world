<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                    {{--About--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        About Us
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('about.index')}}">
                                <i class="metismenu-icon">
                                </i>Edit
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Services--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-usb"></i>
                        Services
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('service.create')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('service.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                    {{--Approach--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plane"></i>
                        Approach
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Mission
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('mission.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i> Vision
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('vision.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i> Plan
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('plan.index')}}">
                                        <i class="metismenu-icon">
                                        </i>Edit
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


{{--                --}}{{--Expertise--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <i class="metismenu-icon pe-7s-users"></i>--}}
{{--                        Expertise--}}
{{--                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('expertise.create')}}">--}}
{{--                                <i class="metismenu-icon">--}}
{{--                                </i>Create--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('expertise.index')}}">--}}
{{--                                <i class="metismenu-icon">--}}
{{--                                </i>List--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                {{--Galleries--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-usb"></i>
                        Galleries
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('gallery.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Image
                            </a>
                        </li>
                        <li>
                            <a href="{{route('gallery.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Heroes--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-usb"></i>
                        Home Carousel Image
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('hero.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Image
                            </a>
                        </li>
                        <li>
                            <a href="{{route('hero.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Organization--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Partner Organization
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('organization.create')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('organization.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Products--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Products
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('product.create')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('product.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Filters--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Product Filters
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('filter.create')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('filter.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>


                {{--Timeline--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Timeline information
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('timeline.create')}}">
                                <i class="metismenu-icon">
                                </i>Add Info Details (if not added previously)
                            </a>
                        </li>
                        <li>
                            <a href="{{route('timeline.index')}}">
                                <i class="metismenu-icon">
                                </i>Info Details
                            </a>
                        </li>
                    </ul>
                </li>

                {{--Members--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Organization Members
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('member.create')}}">
                                <i class="metismenu-icon">
                                </i>Create
                            </a>
                        </li>
                        <li>
                            <a href="{{route('member.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>



                {{--Contact--}}
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-phone"></i>
                        Contact
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
{{--                        <li>--}}
{{--                            <a href="{{route('contact.create')}}">--}}
{{--                                <i class="metismenu-icon">--}}
{{--                                </i>Create--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="{{route('contact.index')}}">
                                <i class="metismenu-icon">
                                </i>List
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
