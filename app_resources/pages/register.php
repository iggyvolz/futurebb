<?php
$page_title = 'Register';
if ($dirs[2] != futurebb_hash(LoginController::GetRandId())) {
	httperror(404);
}
translate('<addfile>', 'register');
if ($futurebb_config['disable_registrations']) {
	?>
    <h2><?php echo translate('regsdisabled'); ?></h2>
    <p><?php echo translate('regsdisableddesc'); ?></p>
    <?php
	return;
}
if (isset($_POST['form_sent'])) {
	$errors = array();
	if (strlen($_POST['username']) < 4) {
		$errors[] = translate('shortusername');
	}
	if (!preg_match('%^(.*?)@(.*?)\.(.*?)$%', $_POST['email'])) {
		$errors[] = translate('bademail');
	}
	$result = $db->query('SELECT 1 FROM `#^users` WHERE LOWER(username)=\'' . $db->escape(strtolower($_POST['username'])) . '\'') or error('Failed to check for duplicate users', __FILE__, __LINE__, $db->error());
	if ($db->num_rows($result)) {
		$errors[] = translate('duplicateuser');
	}
	if ($_POST['password1'] != $_POST['password2']) {
		$errors[] = translate('passnomatch');
	}
	if (strlen($_POST['password1']) < 8) {
		$errors[] = translate('shortpass');
	}
	//is it in the list of 10K most common passwords? (it was base64-encoded because it contains some inappropriate words)
	$common = explode("\n", base64_decode(file_get_contents(FORUM_ROOT . '/app_config/commonpasswords.txt')));
	if (in_array($_POST['password1'], $common)) {
		$errors[] = translate('commonpass');
	}
	unset($common); //unset the variable to save memory
	if (!check_username($_POST['username'])) {
		$errors[] = translate('badusername', htmlspecialchars($char));
	}
	$result = $db->query('SELECT 1 FROM `#^users` WHERE registration_ip=\'' . $db->escape($_SERVER['REMOTE_ADDR']) . '\' AND registered>' . (time() - 60 * 60 * 2)) or error('Failed to check for recent registrations from this IP', __FILE__, __LINE__, $db->error());
	if ($db->num_rows($result)) {
		$errors[] = translate('dupeipreg');
	}
	$hook_result = ExtensionConfig::run_hooks('review_registration', array('username' => $_POST['username'], 'password' => $_POST['password1'], 'email' => $_POST['email']));
	if (!$hook_result && empty($errors)) {
		$errors[] = translate('unknownerror');
	}
	if (empty($errors)) {
		if ($futurebb_config['verify_registrations']) {
			$access_code = '\'' . $db->escape(md5($_POST['email'] . time() . rand(1,1000))) . '\'';
			mail($_POST['email'], $futurebb_config['board_title'] . ' user activation service', translate('verifyemail', $_POST['username'], $base_config['baseurl'], $access_code), 'Content-type: text/plain' . "\r\n" . 'From: FutureBB Registration Service <' . $futurebb_config['admin_email']);
		} else {
			$access_code = 'NULL';
		}
		$token_exists = true;
		while ($token_exists) {
			$token = md5(rand(1,10000000000));
			$result = $db->query('SELECT 1 FROM `#^users` WHERE rss_token=\'' . $db->escape($token) . '\'') or error('Failed to check if token exists', __FILE__, __LINE__, $db->error());
			$token_exists = $db->num_rows($result);
		}
		$db->query('INSERT INTO `#^users`(username,password,registered,registration_ip,group_id,email,last_visit,timezone,activate_key,language,rss_token) VALUES(\'' . $db->escape($_POST['username']) . '\',\'' . futurebb_hash($_POST['password1']) . '\',' . time() . ',\'' . $db->escape($_SERVER['REMOTE_ADDR']) . '\',' . intval($futurebb_config['default_user_group']) . ',\'' . $db->escape($_POST['email']) . '\',' . time() . ',' . intval($_POST['timezone']) . ',' . $access_code . ',\'' . $db->escape($_POST['language']) . '\',\'' . $token . '\')') or error('Failed to create user', __FILE__, __LINE__, $db->error());
		redirect($base_config['baseurl']);
		return;
	}
}
?>
<h2><?php echo translate('register'); ?></h2>
<?php if ($futurebb_config['rules'] != '') {
	echo '<h3>Rules</h3><p>' . $futurebb_config['rules'] . '</p><h3>Information</h3>';
}
$_SESSION['verified'] = 0;
?>
<form action="<?php echo $base_config['baseurl']; ?>/register/<?php echo futurebb_hash(LoginController::GetRandId()); ?>" method="post" enctype="multipart/form-data">
	<?php
	if (isset($errors) && !empty($errors)) {
		echo '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	}
	?>
	<table border="0" class="in_form">
		<tr>
			<th><?php echo translate('username'); ?></th>
			<td><input type="text" name="username" /></td>
		</tr>
		<tr>
			<th><?php echo translate('password'); ?></th>
			<td><input type="password" name="password1" /></td>
		</tr>
		<tr>
			<th><?php echo translate('confirmpwd'); ?></th>
			<td><input type="password" name="password2" /></td>
		</tr>
		<tr>
			<th><?php echo translate('emailaddrnocolon'); ?></th>
			<td><input type="text" name="email" /></td>
		</tr>
		<tr>
			<th><?php echo translate('language'); ?></th>
			<th><select name="language"><?php
			$handle = opendir(FORUM_ROOT . '/app_config/langs');
			while ($f = readdir($handle)) {
				if ($f != '.' && $f != '..') {
					$f = htmlspecialchars($f);
					echo '<option value="' . $f . '">' . $f . '</option>';
				}
			}
			?></select></th>
		</tr>
		<tr>
			<th><?php echo translate('timezone'); ?></th>
			<td><select name="timezone"><?php
			$timezones = DateTimeZone::listIdentifiers();
			foreach ($timezones as $key => $val) {
				echo '<option value="'.  $key . '">' . $val . '</option>';
			}
			?>
			</select></td>
		</tr>
	</table>
	<?php
	ExtensionConfig::run_hooks('show_captcha');
	?>
	<p><input type="submit" name="form_sent" value="<?php echo translate('submit'); ?>" /></p>
</form>