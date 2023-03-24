<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('staff.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">FPT SYSTEM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.trainee.index') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Trainees</span>
        </a>
        
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link " href="{{ route('staff.trainer.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Trainers</span>
        </a>
        
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.category.index') }}" >
            <i class="fas fa-fw fa-wrench"></i>
            <span>Categories</span>
        </a>
        
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.course.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Courses</span>
        </a>
        
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.topic.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Topics</span>
        </a>
        
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.assigncourse.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Assign Course</span>
        </a>
        
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('staff.assigntopic.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Assign Topic</span>
        </a>
        
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
