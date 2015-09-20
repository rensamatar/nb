<nav id="menu" class="">
	<ul>
		<li {!! Request::is('/') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="/"><i class="iconmenu fa fa-home"></i> Home</a>
		</li>
		<li {!! Request::is('about/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('about') !!}"><i class="iconmenu fa fa-leaf"></i> About</a>
		</li>
		<li {!! Request::is('services/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('services') !!}"><i class="iconmenu fa fa-gears"></i> Services</a>
		</li>
		<li {!! Request::is('team/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('team') !!}"><i class="iconmenu fa fa-user"></i> Team</a>
		</li>
		<li {!! Request::is('activities/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('activities') !!}"><i class="iconmenu fa fa-desktop"></i> Activity</a>
		</li>
		<li {!! Request::is('careers/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('careers') !!}"><i class="iconmenu fa fa-eye"></i> Jobs</a>
		</li>
		<li {!! Request::is('contact/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('contact') !!}"><i class="iconmenu fa fa-paper-plane"></i> Contact</a>
		</li>
	</ul>
</nav>
<a href="#hi" class="nb-nav-trigger">Menu<span class="nb-icon"></span></a>
