<style>
	.error {color: red; display: none;}
</style>
<div class="container">
	<div class="heading text-center">
		<h2>Contact</h2>
		<p class="lead">Would you like to know more about me? Get in touch!</p>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form name="contactForm" action="./php/porfolioContact.php" method="POST" novalidate>
				<div class="form-group">
					<span class="error" id="input-name-error">Oops, please leave your name</span>
					<input type="text" id="input-name" class="form-control" name="fName" placeholder="Name * " required>
				</div>
				<div class="form-group">
					<span class="error" id="input-email-error">Your email address is necessary</span>
					<input type="email" id="input-email" class="form-control" name="fEmail" placeholder="Email address * " required>
				</div>
				<div class="form-group">
					<span class="error" id="input-message-error">Please give me advice, opinion, or any kind of message</span>
					<textarea id="input-message" class="form-control" cols="30" rows="10" name="fMessage" placeholder="Message * " required></textarea>
				</div>
				<div class="form-group">
					<button id="submit" class="btn btn-default" disabled>Get in touch!</button>
				</div>
			</form>
		</div>
		<div class="col-md-4 text-center">
			<div class="general-info">General Info.</div>
			<div class="info-name">Wataru Oguchi</div>
			<div class="info-titles">Software Engineer <br>&amp; Web Developer</div>
			<div class="info-mail">hello@wataruoguchi.com</div>
			<div class="social">
				<ul class="social-network social-circle">
					<li><a target="_blank" href="https://www.linkedin.com/in/wataruoguchi" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li><a target="_blank" href="https://github.com/wataruoguchi/" title="GitHub"><i class="fa fa-github-alt"></i></a></li>
					<li><a target="_blank" href="http://stackoverflow.com/users/3718498/wataru" title="stackoverflow"><i class="fa fa-stack-overflow"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
