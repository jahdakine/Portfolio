@layout('layout')

@section('title')
	Contact
@endsection

@section('header')
@endsection

@section('nav')
	@parent
@endsection

@section('top')
<hr class="shim">
@endsection

@section('aside')
@endsection

@section('main')
<section id="communicate">
	<h3>Get in touch</h3>
	<p>To use the mail facilities, please allow popups from my site 
	{{ HTML::a_img('#', '', 'Help with popups', '/img/help-icon.png', '', array('id' => 'help'), array('class' => 'to-middle', "width" => "16", "height" => "19"), true) }}
	(this is the only time I promise).
	A <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> 
	will be displayed in a new window to help prevent spam to my inboxes and reveal my email addresses.</p>
	<ul class="nolist">
		<li>
			{{ HTML::a_img('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=', 'Gmail', 'Reveal this e-mail address for Gmail', '/img/gmail-sm-icon.png', '', array('class' => 'popup', 'onclick' => "window.open('http://www.google.com/recaptcha/mailhide/d?k\07501QoO8IU9RiXd2fkEo9RIO9g\75\75\46c\75AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;", "class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}
		</li>
		<li>
			{{ HTML::a_img('http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=', 'Mac Mail', 'Reveal this e-mail address for Mac mail', '/img/mail-icon.png', '', array('class' => 'popup','onclick' => "window.open('http://www.google.com/recaptcha/mailhide/d?k\07501QoO8IU9RiXd2fkEo9RIO9g\75\75\46c\75z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;", "class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}
		</li>
		<li>
			{{ HTML::a_img('callto:jahdakine?call', "Skype call (best to email first - I don't camp out there)", 'Open Skype', '/img/skype-sm-icon.png', '', array('target' => '_blank' ,"class" => "to-middle"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}
		</li>
	</ul>
	<p>
	You can always head back to the {{ HTML::link("/", "home page", array("title"=>"Home")) }} and nudge me at one of the social media hangouts listed. 
	</p>
	<p>Thanks for stopping by!</p>
</section><!-- // communicate -->
<section id="helper" class="hidden">
	<h3>Popup Help</h3>
	<ul class="nolist">
		<li>
			{{ HTML::a_img('http://support.mozilla.org/en-US/kb/pop-blocker-settings-exceptions-troubleshooting', 'Firefox', 'Open help for Firefox popups in a new window/tab', '/img/firefox-icon.png', '', array('target' => '_blank', "class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}
		</li>
		<li>
			{{ HTML::a_img('http://support.google.com/chrome/bin/answer.py?hl=en&amp;answer=95472', 'Chrome', 'Open help for Chrome popups in a new window/tab', '/img/chrome-icon.png', '', array('target' => '_blank', "class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}
		</li>
		<li>
			{{ HTML::a_img('http://www.apple.com/safari/features.html#security', 'Safari', 'Open help for Safari popups in a new window/tab', '/img/safari-icon.png', '', array('target' => '_blank', "class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}	
		</li>			
		<li>
			{{ HTML::a_img('http://www.opera.com/browser/tutorials/personalize/content/#popups', 'Opera', 'Open help for Opera popups in a new window/tab', '/img/opera-icon.png', '', array('target' => '_blank' ,"class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}	
		</li>
		<li>
			{{ HTML::a_img('http://windows.microsoft.com/en-US/Windows7/Internet-Explorer-Pop-up-Blocker-frequently-asked-questions', 'Internet Explorer', 'Open help for Internet Explorer popups in a new window/tab', '/img/ie-icon.png', '', array('target' => '_blank' ,"class" => "to-middle offsite"), array('class' => 'to-bottom', "width" => "32", "height" => "32"), true) }}	
		</li>
	</ul>
</section><!-- // helper -->
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('/js/contact.funcs.js') }}
@endsection
