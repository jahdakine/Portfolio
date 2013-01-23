@layout('layout')

@section('title')
	Contact
@endsection
@section('header')
	{{ HTML::script('/js/contact.funcs.js') }}
@endsection

@section('nav')
	@parent
@endsection

@section('content')
<section>
	<h2>Get in touch</h2>
	<p>To use the mail facilities, please allow popups from my site 
	<a href="#" id="help"><img src="/img/help-icon.png" class="shim" title="Help with popups"/></a> (this is the only time I promise).
	A <acronym title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</acronym> 
	will be displayed in a new window to help prevent spam to my inboxes and reveal my email addresses.</p>

	<ul class="communicate">
		<li>
			<!-- !!! Can this be done with blade using a macro? -->
			<a href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501QoO8IU9RiXd2fkEo9RIO9g\75\75\46c\75AdMM-lX29vaEjUJrW54pfWifDhvAuHZcW2xAn_8BgMY\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" title="Reveal this e-mail address for Gmail">
				<img src="/img/gmail-sm-icon.png" alt=""/> Gmail (quickest)
			</a>
		</li>
		<li>
			<a href="http://www.google.com/recaptcha/mailhide/d?k=01QoO8IU9RiXd2fkEo9RIO9g==&amp;c=z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501QoO8IU9RiXd2fkEo9RIO9g\75\75\46c\75z11k5PSfeXXPl_TPeGhabRsf9FNzh2EmS1_Y2mJjoUc\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=860,height=600,left=100,top=100'); return false;" title="Reveal this e-mail address for Mac mail">
				<img src="/img/mail-icon.png" alt=""/> Mac Mail (I'll get to it eventually)
			</a>
		</li>
		<li>
			<a href="skype:jahdakine?call" title="Open Skype">
				<img src="/img/skype-sm-icon.png" alt=""/> Skype call (best to email first - I don't camp out there)
			</a>
		</li>
	</ul>
	<p>
	You can always head back to the {{ HTML::link("/", "home page", array("title"=>"Home")) }} and nudge me at one of the social media hangouts listed. 
	</p>
	<p>Thanks for stopping by!</p>
</section>
<section id="helper" class="hidden">
	<h4>Popup Help</h4>
	<ul class="communicate">
		<li>
			<!-- !!! Can this be done with blade using a macro? -->
			<a href="http://support.mozilla.org/en-US/kb/pop-blocker-settings-exceptions-troubleshooting" target="_blank" title="Open Popup help for Firefox in a new window/tab">
				<img src="/img/firefox-icon.png" alt=""/> Firefox
			</a>
		</li>
		<li>
			<a href="http://support.google.com/chrome/bin/answer.py?hl=en&amp;answer=95472" target="_blank" title="Open Popup help for Chrome in a new window/tab">
				<img src="/img/chrome-icon.png" alt=""/> Chrome
			</a>
		</li>
		<li>
			<a href="http://www.apple.com/safari/features.html#security" target="_blank" title="Open Popup help for Safari in a new window/tab">
				<img src="/img/safari-icon.png" alt=""/> Safari
			</a>
		</li>			
		<li>
			<a href="http://www.opera.com/browser/tutorials/personalize/content/#popups" target="_blank" title="Open Popup help for Opera in a new window/tab">
				<img src="/img/opera-icon.png" alt=""/> Opera
			</a>
		</li>
		<li>
			<a href="http://windows.microsoft.com/en-US/Windows7/Internet-Explorer-Pop-up-Blocker-frequently-asked-questions" target="_blank" title="Open Popup help for Internet Explorer in a new window/tab">
				<img src="/img/ie-icon.png" alt=""/> Internet Explorer
			</a>
		</li>
	</ul>
</section>
@endsection

@section('footer')

@endsection

