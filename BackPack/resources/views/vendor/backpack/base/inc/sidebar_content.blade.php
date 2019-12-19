<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('zone') }}'><i class='nav-icon fa fa-question'></i> Zones</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('shape') }}'><i class='nav-icon fa fa-question'></i> Shapes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('property-type') }}'><i class='nav-icon fa fa-question'></i> PropertyTypes</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('property-status') }}'><i class='nav-icon fa fa-question'></i> PropertyStatuses</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('property') }}'><i class='nav-icon fa fa-question'></i> Properties</a></li>
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-group"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-group"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cog'></i> <span>Settings</span></a></li>"
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon fa fa-terminal'></i> Logs</a></li>"