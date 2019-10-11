<?php
/*
 * Login page.
 */

if (!isset($version)) {exit;}

if (isset($msg) && $msg != '') {echo '<div class="alert alert-warning" role="alert">' . $msg . '</div>';}
?>
<h1 class="login-h1 text-center"><?php echo _('AS Cloud CDN - Cloudflare\'s Partners'); ?></h1>
<form class="form-signin text-center" method="POST" action="">
	<h1 class="h3 mb-3 font-weight-normal"><?php echo _('Log In'); ?></h1>
	<label for="inputEmail" class="sr-only"><?php echo _('Email on cloudflare.com'); ?></label>
	<input type="email" name="cloudflare_email" id="inputEmail" class="form-control" placeholder="<?php echo _('Email on cloudflare.com'); ?>" required autofocus>
    <p></p>
	<label for="inputPassword" class="sr-only"><?php echo _('Password on cloudflare.com'); ?></label>
	<input type="password" name="cloudflare_pass" id="inputPassword" class="form-control" placeholder="<?php echo _('Password on cloudflare.com'); ?>" required>
	<div class="checkbox mb-3">
		<label>
			<input type="checkbox" value="remember-me" name="remember"> <?php echo _('Remember me'); ?>
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo _('Log in'); ?></button>
    <p></p>
	
</form>
<p class="alert alert-info"><?php echo _('If you are not a Cloudflare user yet, a new account will be created.'); ?></p>
<p></p>
<p class="alert alert-warning"><?php echo _('By clicking Log In, you agree to our  <a href="https://io.airscr.com/legal/" target="_blank">Privacy Policy and Terms of Services</a>, Cloudflare\'s <a href="https://www.cloudflare.com/subscriptionagreement/">Terms</a>, <a href="https://www.cloudflare.com/privacypolicy/">Privacy Policy</a>, and <a href="https://www.cloudflare.com/cookie-policy/">Cookie Policy</a>. Your Cloudflare credentials won\'t be stored'); ?></p>