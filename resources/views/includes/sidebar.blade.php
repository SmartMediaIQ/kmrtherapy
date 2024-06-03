<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">

            <ul class="metismenu list-unstyled p-3" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="/dashboard" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clients.index') }}" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-tables">Clients</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('leads.index') }}" class="waves-effect">
                        <i class="bx bx-target-lock"></i>
                        <span key="t-chat">Leads</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('export.index') }}" class="waves-effect">
                        <i class="bx bx-export"></i>
                        <span key="t-file-manager">Exports</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('insights.index') }}" class="waves-effect">
                        <i class="bx bx-bar-chart"></i>
                        <span key="t-file-manager">Insights</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bonus.index') }}" class="waves-effect">
                        <i class="bx bx-dollar-circle"></i>
                        <span key="t-file-manager">Bonuses</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('marketing.index') }}" class="waves-effect">
                        <i class="bx bx-laptop"></i>
                        <span key="t-file-manager">Marketing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agency.index') }}" class="waves-effect">
                        <i class="bx bxs-group"></i>
                        <span key="t-file-manager">Agency</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow waves-effect">
                        <i class="bx bx-analyse"></i>
                        <span class="t-settings">Setting</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li>
                            <a href="/user" class="waves-effect">
                                <span key="t-user">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="/role" class="waves-effect">
                                <span key="t-role">Role</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('setting.general') }}" class="waves-effect">
                                <span key="t-setting">General setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('setting.sociallink') }}" class="waves-effect">
                                <span key="t-setting">Social link</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('setting.apidetails') }}" class="waves-effect">
                                <span key="t-setting">API details</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
