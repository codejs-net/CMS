<!-- @php 
    $istitute = session()->get('istitute');
    $user = session()->get('user');  
@endphp  -->

        <!-- Sidebar -->
    <div class="sidebar">

            <nav class="mt-2 js-sidebar-text">
            
                <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                <!-- dashboard -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                {{__('Dashboard')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('Library')}}</p>
                                </a>
                            </li>
                            

                        </ul>

                    
                   
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user-circle"></i>
                            <p>
                                {{__('User Account')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                          
                            <li class="nav-item">
                            <a href="{{ route('my_account') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('My Account')}}</p>
                                </a>
                            </li>
                          
                            @can('user-list')
                            <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('Users Account')}}</p>
                                </a>
                            </li>
                           
                            @endcan
                        </ul>
                    </li>
                    @can('role-list')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-lock"></i>
                            <p>
                            {{__('Roles & Permisions')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('Roles & Permisions')}}</p>
                                </a>
                            </li>
 
                        </ul>
                    </li>
                    @endcan

                    @can('activity-log')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tasks"></i>
                            <p>
                            {{__('Activity Log')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('Search Log')}}</p>
                                </a>
                            </li>
 
                        </ul>
                    </li>
                    @endcan
                    {{-- setting --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                            {{__('Settings')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('basic_setting-list')
                            <li class="nav-item">
                                <a href="{{ route('basic_setting') }}" class="nav-link">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>{{__('Basic Settings')}}</p>
                                </a>
                            </li>
                            @endcan
                            @can('lms_setting-list')
                            <li class="nav-item">
                            <a href="{{ route('lms_setting') }}" class="nav-link">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>{{__('LMS Settings')}}</p>
                                </a>
                            </li>
                            @endcan
                            @can('lending_setting-list')
                            <li class="nav-item">
                                <a href="{{ route('lending_setting') }}" class="nav-link">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>{{__('Lending Settings')}}</p>
                                </a>
                            </li>
                            @endcan
                            @can('notification_setting-list')
                            <li class="nav-item">
                                <a href="{{ route('notification_setting') }}" class="nav-link">
                                    <i class="fa fa-wrench nav-icon"></i>
                                    <p>{{__('Notification Settings')}}</p>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>

                    {{-- backup --}}
                    @can('backup')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-database"></i>
                            <p>
                            {{__('Backup & Restore')}}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('backup_db') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{__('Backup DataBase')}}</p>
                                </a>
                            </li>
 
                        </ul>
                    </li>
                    @endcan
                   
                   


                    <li class="nav-header"></li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Calculater</p>
                        </a>
                    </li> -->

                </ul>

                <hr />


            </nav>
            <!-- /.sidebar-menu -->
        </div>
  