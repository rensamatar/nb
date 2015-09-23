<nav id="menu" class="">
	<ul>
		<li {!! Request::is('/') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="/"><i class="iconmenu fa fa-home"></i> Home</a>
		</li>
		<li {!! Request::is('about/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('about') !!}">About</a>
		</li>
		<li {!! Request::is('services/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('services') !!}">Services</a>
		</li>
		<li {!! Request::is('team/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('team') !!}">Team</a>
		</li>
		<li {!! Request::is('client/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('client') !!}">Client</a>
		</li>
		<li {!! Request::is('activities/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('activities') !!}">Activity</a>
		</li>
		<li {!! Request::is('careers/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('careers') !!}">Careers</a>
		</li>
		<li {!! Request::is('contact/*') ? 'class="selected"' : '' !!}>
			<a class="linkside smoothScroll" href="{!! url('contact') !!}">Contact</a>
		</li>
	</ul>
</nav>
<a href="#hello" class="nb-nav-trigger">Menu<span class="nb-icon"></span></a>
