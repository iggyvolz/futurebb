<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array();
$lang_insert_data[] = '(\'English\',\'' . $db->escape('topicsperpage') . '\',\'' . $db->escape('Topics per page') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('postsperpage') . '\',\'' . $db->escape('Posts per page') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('showpostcounts') . '\',\'' . $db->escape('Show user post counts') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('showpostcountsdesc') . '\',\'' . $db->escape('Show users&apos; post counts in their posts') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('zeronolimit') . '\',\'' . $db->escape('Set an option to zero for no limit') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maxchars') . '\',\'' . $db->escape('Maximum number of characters') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maxlines') . '\',\'' . $db->escape('Maximum number of lines') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintenancemode') . '\',\'' . $db->escape('Maintenance mode') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintenancemsg') . '\',\'' . $db->escape('Maintenance message:') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('autoactivatemaint') . '\',\'' . $db->escape('Automatically activate maintenance mode in') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintschedpanel') . '\',\'' . $db->escape('(Maintenance mode is already scheduled to turn on at $1).') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('autodeactivatemaint') . '\',\'' . $db->escape('Automatically deactivate maintenance mode in ') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintoffschedpanel') . '\',\'' . $db->escape('(Maintenance mode is already scheduled to turn off at $1).') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('serverinfo') . '\',\'' . $db->escape('Server info') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('fbbversion') . '\',\'' . $db->escape('FutureBB Version') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('database') . '\',\'' . $db->escape('Database') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('os') . '\',\'' . $db->escape('Operating system') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('newversionmsg') . '\',\'' . $db->escape('A new version of FutureBB is available! You can download it on <a href="http://futuresight.org/products/futurebb">the FutureSight Technologies website</a>.') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maxquotedepth') . '\',\'' . $db->escape('Maximum quote depth') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('quotedepth>1') . '\',\'' . $db->escape('The maximum quote depth must be greater than 1') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('fixerrors') . '\',\'' . $db->escape('The following errors must be fixed before continuing:') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('avatarmaxfilesize') . '\',\'' . $db->escape('Maxiumum avatar file size') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('avatarfilesizedesc') . '\',\'' . $db->escape('The maximum allowed avatar file size (KiB)') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('enablebbcode') . '\',\'' . $db->escape('Enable BBCode') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('enablebbcodedesc') . '\',\'' . $db->escape('Allow BBCode in posts - if this box is changed, it will not affect existing posts unless the &quot;reparse posts&quot; tool is used on the maintenance page') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('enablesmilies') . '\',\'' . $db->escape('Enable smilies') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('enablesmiliesdesc') . '\',\'' . $db->escape('Enable smilies - if this box is changed, it will not affect existing posts unless the &quot;reparse posts&quot; tool is used on the maintenance page') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('undeletepostheader') . '\',\'' . $db->escape('Are you sure you want to undelete the post? You can view it below.') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('undeletetopicheader') . '\',\'' . $db->escape('Are you sure you wish to undelete this topic?') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('interface') . '\',\'' . $db->escape('Interface') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('addforum') . '\',\'' . $db->escape('Add forum') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('dateformat') . '\',\'' . $db->escape('Date format') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('timeformat') . '\',\'' . $db->escape('Time format') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('basegroupon') . '\',\'' . $db->escape('Base new group on:') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('forumalreadyopen') . '\',\'' . $db->escape('You have modified a forum or already have one open for editing. Please refresh the page and then try again.') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('existingwords') . '\',\'' . $db->escape('Existing words') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('bbcodeinPM') . '\',\'' . $db->escape('BBCode in private messages') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('otherforumeditsconfirmrefresh') . '\',\'' . $db->escape('Edits to a forum have been submitted in another window. Do you want to refresh this page to reflect those changes?') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('archiveforum') . '\',\'' . $db->escape('Archive forum') . '\',\'' . $db->escape('admin') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('changecategory') . '\',\'' . $db->escape('Change category') . '\',\'' . $db->escape('admin') . '\')';
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();