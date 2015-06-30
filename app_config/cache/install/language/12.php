<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array (
  0 => '(\'English\',\'changesmissingkey\',\'$changes[$1] is missing a key.\',\'admin\')',
  1 => '(\'English\',\'invalidchangetype\',\'Invalid change type: \',\'admin\')',
  2 => '(\'English\',\'installcomplete\',\'Installation complete!\',\'admin\')',
  3 => '(\'English\',\'unzipfailed\',\'Something went wrong with unzipping. Not sure what. :(\',\'admin\')',
  4 => '(\'English\',\'installnewext\',\'Install new extension\',\'admin\')',
  5 => '(\'English\',\'forumnotwritable\',\'Your forum root directory is not writable. To fix this, you need to change the permissions. When in doubt, chmod to 0777.\',\'admin\')',
  6 => '(\'English\',\'existingexts\',\'Existing extensions\',\'admin\')',
  7 => '(\'English\',\'noexts\',\'No extensions installed. :(\',\'admin\')',
  8 => '(\'English\',\'website\',\'Website\',\'admin\')',
  9 => '(\'English\',\'supporturl\',\'Support URL\',\'admin\')',
  10 => '(\'English\',\'uninstall\',\'Uninstall\',\'admin\')',
  11 => '(\'English\',\'nouninstallphp\',\'The uninstall.php file is not available. Please contact the extension creator.\',\'admin\')',
  12 => '(\'English\',\'filenotwritable\',\'The following file/directory is not writable: $1. Please change the permissions to fix this. When in doubt, chmod to 0777.\',\'admin\')',
  13 => '(\'English\',\'tempdirfailed\',\'Could not make the temporary directory for your extension. Please make sure that the temp directory (/temp from your forum root) exists and is writable.\',\'admin\')',
  14 => '(\'English\',\'uninstallext\',\'Uninstall extension\',\'admin\')',
  15 => '(\'English\',\'uninstallextintro\',\'Are you sure you want to install the extension <strong>$1</strong>?\',\'admin\')',
  16 => '(\'English\',\'success\',\'Success\',\'admin\')',
  17 => '(\'English\',\'uninstalled\',\'The selected extension was successfully uninstalled.\',\'admin\')',
  18 => '(\'English\',\'return\',\'Return\',\'admin\')',
  19 => '(\'English\',\'boardsettings\',\'Board settings\',\'admin\')',
  20 => '(\'English\',\'boardtitle\',\'Board title\',\'admin\')',
  21 => '(\'English\',\'adminemail\',\'Administrator email\',\'admin\')',
  22 => '(\'English\',\'onlinetimeout\',\'Online timeout\',\'admin\')',
  23 => '(\'English\',\'allowPM\',\'Allow private messaging\',\'admin\')',
  24 => '(\'English\',\'allownotifs\',\'Allow notifications\',\'admin\')',
  25 => '(\'English\',\'onlinetimeoutdesc\',\'If a user does not visit any page after this many seconds, they will be considered offline. Use 0 to disable online/offline display.\',\'admin\')',
  26 => '(\'English\',\'verifyregs\',\'Verify new registrations\',\'admin\')',
  27 => '(\'English\',\'disableregs\',\'Disable new registrations\',\'admin\')',
  28 => '(\'English\',\'verifyregsdesc\',\'Verify new user registrations by emailing them an access code\',\'admin\')',
  29 => '(\'English\',\'disableregsdesc\',\'Do not allow new registrations\',\'admin\')',
  30 => '(\'English\',\'general\',\'General\',\'admin\')',
  31 => '(\'English\',\'userstopicsposts\',\'Users, topics, and posts\',\'admin\')',
  32 => '(\'English\',\'enableavatars\',\'Enable avatars\',\'admin\')',
  33 => '(\'English\',\'enableavatarsdesc\',\'An avatar is a user icon that will show next to all of their posts.\',\'admin\')',
  34 => '(\'English\',\'rulesdesc\',\'Users must agree to these rules when they register. This is not parsed as BBCode and may contain HTML.\',\'admin\')',
  35 => '(\'English\',\'announcement\',\'Announcement\',\'admin\')',
  36 => '(\'English\',\'announcementdesc\',\'Here you may specify an announcement to appear in the top banner under the navigation bar. You may use HTML as this is not parsed as BBCode.\',\'admin\')',
  37 => '(\'English\',\'enableannouncement\',\'Enable announcement?\',\'admin\')',
  38 => '(\'English\',\'siteappearance\',\'Site appearance\',\'admin\')',
  39 => '(\'English\',\'customfooter\',\'Here you may specify custom text to appear below the &quot;Powered by FutureBB&quot; message.\',\'admin\')',
);
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();