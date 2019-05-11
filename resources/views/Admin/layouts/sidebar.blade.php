<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ url('Admin/') }}/images/demo/users/face11.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <br><br>
                <ul class="navigation navigation-main navigation-accordion">
                    <li>
                        <a href="#"><i class="icon-user"></i> <span>{{ trans('app.users') }}</span></a>
                        <ul>
                            <li><a href="{{ url('users/ar') }}">{{ trans('app.all users') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-cog4"></i> <span>{{ trans('app.Services') }}</span></a>
                        <ul>
                            <li><a href="{{ url('services/ar') }}">{{ trans('app.All Services') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-users4"></i> <span>{{ trans('app.Team') }}</span></a>
                        <ul>
                            <li><a href="{{ url('team/ar') }}">{{ trans('app.Team') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-stars"></i> <span>{{ trans('app.Works') }}</span></a>
                        <ul>
                            <li><a href="{{ url('works/ar') }}">{{ trans('app.Works') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-graduation"></i> <span>{{ trans('app.Courses') }}</span></a>
                        <ul>
                            <li><a href="{{ url('courses/ar') }}">{{ trans('app.Courses') }}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-wrench"></i> <span>{{ trans('app.Settings') }}</span></a>
                        <ul>
                            <li><a href="{{ url('settings/ar') }}">{{ trans('app.Settings') }}</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
