
<aside class="navbar-default sidebar">
    <div class="sidebar-overlay-head">
        <img src="{{skarla_url("/assets/images/logo-warning-white@2X.png")}}" alt="Logo" width="80">
        <a href="#" class="sidebar-switch action-sidebar-close">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="sidebar-content">
        <!-- START Sidebar Header -->
        <div class="add-on-container">
            <div class="sidebar-container-default sidebar-section">
                <div class="media">
<!--                    <div class="media-left media-top">
                        <div class="avatar avatar-image avatar-inline">
                            <img src="{{url("img/logo.png")}}" alt="Avatar">                            
                        </div>
                    </div>-->
                    <div class="media-body">
                        <h5 class="media-heading text-white m-t-0 m-b-0"><span>{{Auth::user()->display_name}}</span></h5>
                        <small>{{Auth::user()->getRolesString()}}</small>
                    </div>
                </div>

            </div>    
        </div>
        <!-- END Sidebar Header -->

        <div class="sidebar-content">
            <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
                <strong>Navigation</strong>
            </div>

            <!-- START Tree Sidebar Common -->
            <ul class="side-menu">

                <li class="Recruitment">
                    <a href="#" title="Dashboards">
                        <i class="fa fa-home fa-lg fa-fw"></i>
                        <span class="nav-label">Recruitment</span>
                        <i class="fa arrow"></i>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="{{url("applicants")}}">
                                <span class="nav-label">Applicants</span>
                            </a>
                        </li>                                       
                    </ul>
                </li>                                                                                                                                                                                                            
            </ul>

            <div class="sidebar-default-visible small text-uppercase sidebar-section m-t-3 m-b-2">
                <strong>More Modules To Come Soon...</strong>
            </div>

            <div class="sidebar-default-visible">
                <hr>
            </div>

            <div class="sidebar-default-visible sidebar-section m-b-2">
                <span class="small text-uppercase p-b-2 block">
                    <strong>Pooling Status</strong>
                </span>

                <div class="m-t-2"></div>
                <p><i class="fa fa-circle-o text-lighting-yellow m-r-1"></i>Passed Interview</p>
                <p><i class="fa fa-circle-o text-gray-dark m-r-1"></i>Failed</p>
                <p><i class="fa fa-circle-o text-success m-r-1"></i>Passed Training</p>
                <p><i class="fa fa-circle-o text-danger m-r-1"></i>Retrain</p>

                <div class="m-t-2"></div>
                <p><i class="fa fa-circle-o text-primary m-r-1"></i>Active</p>
                <p><i class="fa fa-circle-o text-soft-purple m-r-1"></i>Floating</p>
                <p><i class="fa fa-circle-o text-warning m-r-1"></i>Banned</p>
                <p><i class="fa fa-circle-o text-gray-light m-r-1"></i> Inactive</p>
                <p><i class="fa fa-circle-o text-green-darker m-r-1"></i> End Of Contract</p>
            </div>
        </div>
    </div>
</aside>