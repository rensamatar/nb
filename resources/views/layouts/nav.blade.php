<a href="#cd-nav" class="cd-nav-trigger">Menu 
	<span class="cd-nav-icon"></span>

	<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
		<circle fill="transparent" stroke="#d44457" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
	</svg>
</a>

<div id="cd-nav" class="cd-nav">
	<div class="cd-navigation-wrapper">
		<div class="cd-half-block">
			<nav>
				<ul class="cd-primary-nav">
					<li><a href="/" {!! Request::is('/') ? 'class="selected"' : '' !!}>Intro</a></li>
					<li><a href="{!! url('about') !!}" {!! Request::is('about') ? 'class="selected"' : '' !!}>About</a></li>
					<li><a href="{!! url('history') !!}" {!! Request::is('history') ? 'class="selected"' : '' !!}>History</a></li>
					<li><a href="{!! url('activities') !!}" {!! Request::is('activities') ? 'class="selected"' : '' !!} {!! Request::is('activities/*') ? 'class="selected"' : '' !!}>Activities</a></li>
					<li><a href="{!! url('careers') !!}" {!! Request::is('careers') ? 'class="selected"' : '' !!} {!! Request::is('careers/*') ? 'class="selected"' : '' !!}>Careers</a></li>
					<li><a href="{!! url('contact') !!}" {!! Request::is('contact') ? 'class="selected"' : '' !!}>Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="cd-half-block">
			<address>
				<ul class="cd-contact-info">
					<li><a href="mailto:info@myemail.co">info@myemail.co</a></li>
					<li>Phone : (038) 763025</li>
					<li>
						<span>Nabun Upgrade International Co.,Ltd</span>
						<span>230/49 หมู่ 11 ตำบลทุ่งสุขลา</span>
						<span>อำเภอศรีราชา ชลบุรี 20230</span>
					</li>
				</ul>
			</address>
		</div>
	</div>
</div>