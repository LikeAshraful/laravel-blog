<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">LikeAshraful</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ route('admin.user.profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="/admin"><i class="fa fa-gear fa-fw"></i>Dashboard</a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
        </li>
    </ul>
    <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bars fa-fw"></i>Posts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/post/create"><i class="fa fa-pencil-square-o fa-fw"></i>New Post</a>
                        </li>
                        <li>
                            <a href="/admin/posts"><i class="fa fa-bars fa-fw"></i>All Posts</a>
                        </li>
                        <li>
                            <a href="/admin/category">Category</a>
                        </li>
                        <li>
                            <a href="/admin/tag"><i class="fa fa-tag fa-fw"></i>Tags</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i>User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/users"><i class="fa fa-users fa-fw"></i>All Users</a>
                        </li>
                        <li>
                            <a href="/admin/user/add"><i class="fa fa-user fa-fw"></i>Add New User</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-building fa-fw"></i>Works<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/works"><i class="fa fa-building-o fa-fw"></i>All Works</a>
                        </li>
                        <li>
                            <a href="/admin/work/add"><i class="fa fa-building fa-fw"></i>Add New Work</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-building fa-fw"></i>Skills<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="/admin/skills"><i class="fa fa-building-o fa-fw"></i>All Skills</a>
                        </li>
                        <li>
                            <a href="/admin/skills/add"><i class="fa fa-building fa-fw"></i>Add New Skills</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
