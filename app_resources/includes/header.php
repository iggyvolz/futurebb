<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><$page_title/> - <?php echo htmlspecialchars($futurebb_config['board_title']); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_config['baseurl']; ?>/styles/<?php echo (file_exists(FORUM_ROOT . '/app_resources/pages/css/' . $futurebb_user['style'] . '.css') ? $futurebb_user['style'] : 'default'); ?>.css" />
    <script type="text/javascript">
	//<![CDATA[
	function showNotifs() {
		var dropDown = document.getElementById('notificationsdropdown');
		if (dropDown.style.display == 'block') {
			dropDown.style.display = 'none';
		} else {
			dropDown.style.display = 'block';
			if (window.XMLHttpRequest) {
				req = new XMLHttpRequest();
			} else {
				 req = new ActiveXObject('Microsoft.XMLHTTP');
			}
			req.open('GET', '<?php echo $base_config['baseurl']; ?>/messages?nopage=true', true);
			req.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
			req.send('');
			
			req.onreadystatechange = function() {
				if (req.readyState==4 && req.status==200) {
					document.getElementById('notificationsdropdown').innerHTML = req.responseText;
				} else {
					//failure
				}
			 }
		}
	}
	//]]>
	</script>
	<$other_head_stuff/>
	<?php
	ExtensionConfig::run_hooks('load_header', array());
	?>
</head>

<body>

<div id="futurebb">
	<div class="forum_header">
		<div>
			<?php
				if ($futurebb_user['id'] != 0) {
					// If logged in
					
					//user button
					echo '<a class="userbutton" href="'. $base_config['baseurl'] . '/users/' . $futurebb_user['username'] . '">';
					if (file_exists(FORUM_ROOT . '/static/avatars/' . $futurebb_user['id'] . '.' . $futurebb_user['avatar_extension'])) {
						echo '<img src="' . $base_config['baseurl'] . '/static/avatars/' . $futurebb_user['id'] . '.' . $futurebb_user['avatar_extension'] . '" width="36px" height="36px" alt="avatar" />';
					}
					echo '<strong>' . $futurebb_user['username'] . '</strong>
					</a>';
					
					//notification area
					if ($futurebb_user['g_mod_privs'] || $futurebb_user['g_admin_privs']) {
						$result = $db->query('SELECT 1 FROM `#^reports` WHERE zapped IS NULL AND status<>\'withdrawn\'') or error('Failed to check new reports', __FILE__, __LINE__, $db->error());
						if ($db->num_rows($result)) {
							echo '<a class="userbutton" href="' . $base_config['baseurl'] . '/admin/reports" title="' . translate('newreports') . '"><img src="' . $base_config['baseurl'] . '/static/img/alert16.png" alt="new reports" /><span class="notifications_count">' . $db->num_rows($result) . '</span></a>';
						}
					}
					if ($futurebb_config['maintenance'] && $futurebb_user['g_admin_privs']) {
						echo '<a class="userbutton" href="' . $base_config['baseurl'] . '/admin#maintenance" title="' . translate('maintenabled') . '"><img src="' . $base_config['baseurl'] . '/static/img/lock16.png" alt="maintenance" /></a>';
					}
					if ($futurebb_config['turn_on_maint'] && $futurebb_user['g_admin_privs']) {
						echo '<a class="userbutton" href="' . $base_config['baseurl'] . '/admin#maintenance" title="' . translate('maintsched', user_date($futurebb_config['turn_on_maint'])) . '"><img src="' . $base_config['baseurl'] . '/static/img/clock16.png" alt="scheduled maintenance" /></a>';
					}
					if ($futurebb_user['notifications_count'] > 0) {
						echo '<span id="notifications"><a class="userbutton" href="' . $base_config['baseurl'] . '/messages" onclick="showNotifs(); return false;" title="' . translate('unreadnotifications', $futurebb_user['notifications_count']) . '"><img src="' . $base_config['baseurl'] . '/static/img/message16.png" alt="unread notifications" />
						<span class="notifications_count">' . $futurebb_user['notifications_count']. '</span></a>';
						echo '';
						echo '</span>';
					}
				} else {
					// Not logged in, show login link
					echo '<a class="userbutton" style="font-weight: bold;" href="' . $base_config['baseurl'] . '/login">' . translate('login') . '</a>';
				}
			?>
			<h1><a href="<?php echo $base_config['baseurl']; ?>"><?php echo htmlspecialchars($futurebb_config['board_title']); ?></a></h1>
		</div>
        <div id="notificationsdropdown">
        </div>
		<div id="navlistwrap">
			<ul id="navlist">
				<?php
				if (!file_exists(FORUM_ROOT . '/app_config/cache/header.php')) {
					CacheEngine::CacheHeader();
				}
				require FORUM_ROOT . '/app_config/cache/header.php';
				foreach ($nav_items as $val) {
					echo '<li>' . $val . '</li>';
				}
				?>
			</ul>
		</div>
		<div id="headerinfo">
			<?php
			// Display board announcements if they are enabled
			if($futurebb_config['announcement_enable'] == 1) {
				echo '<p>' . $futurebb_config['announcement_text'] . '</p>';
			}
			?>
		</div>
	</div>
	<$breadcrumbs/>
	<?php if (isset($page_info['nocontentbox'])) { ?>
	<div class="forum_content_nobox">
	<?php } else { ?>
	<div class="forum_content">
	<?php } ?>