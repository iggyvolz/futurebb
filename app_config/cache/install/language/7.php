<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array();
$lang_insert_data[] = '(\'English\',\'' . $db->escape('underreview') . '\',\'' . $db->escape('Under review') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('rejected') . '\',\'' . $db->escape('Rejected') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('accepted') . '\',\'' . $db->escape('Accepted') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('noresp') . '\',\'' . $db->escape('No response') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('withdrawnbyreporter') . '\',\'' . $db->escape('Withdrawn by reporter') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('unknown') . '\',\'' . $db->escape('Unknown') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('nooldreports') . '\',\'' . $db->escape('Yay! There are no old reports!') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('reportpost') . '\',\'' . $db->escape('Report post') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('reportpostreason') . '\',\'' . $db->escape('Please enter a short reason why you are reporting this post.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('systemreportmsg') . '\',\'' . $db->escape('This report was automatically generated by FutureBB.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('trashbindesc') . '\',\'' . $db->escape('Deleted topics and posts can be recovered here.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('deletedbyon') . '\',\'' . $db->escape('$1 deleted by <b>$2</b> on $3') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('recentdeleted') . '\',\'' . $db->escape('Recently deleted $1') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('deletiontime') . '\',\'' . $db->escape('Deletion time') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('deletedby') . '\',\'' . $db->escape('Deleted by') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('styleconflict') . '\',\'' . $db->escape('A style set with this name already exists. Please rename your stylesheet and retry.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('invalidfile') . '\',\'' . $db->escape('Invalid file.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('appearanceandstyle') . '\',\'' . $db->escape('Appearance and style') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('stylesets') . '\',\'' . $db->escape('Style sets') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('styleset') . '\',\'' . $db->escape('Style set') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('installnewcss') . '\',\'' . $db->escape('Install new style set') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('cssfile') . '\',\'' . $db->escape('CSS File:') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('logo') . '\',\'' . $db->escape('Logo') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('pngfile') . '\',\'' . $db->escape('PNG File:') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('favicon') . '\',\'' . $db->escape('Favicon') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('icofile') . '\',\'' . $db->escape('ICO File:') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('nofileuploads') . '\',\'' . $db->escape('Your server does not accept file uploads. Please change the "allow_file_uploads" setting in your php.ini if possible.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('install') . '\',\'' . $db->escape('Install') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('replace') . '\',\'' . $db->escape('Replace') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('icon') . '\',\'' . $db->escape('Icon') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('newreports') . '\',\'' . $db->escape('There are new reports') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintenabled') . '\',\'' . $db->escape('Maintenance mode is enabled') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintsched') . '\',\'' . $db->escape('This forum will automatically go into maintenance mode at $1. At that time, all non-admin users will lose access.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('unreadnotifications') . '\',\'' . $db->escape('You have $1 unread notifications') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('messages') . '\',\'' . $db->escape('Messages') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('user_sent_warning') . '\',\'' . $db->escape('The admin or moderator $1 issued the following message to you.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('user_sent_msg') . '\',\'' . $db->escape('The user $1 sent the following message to you.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('user_mentioned_you') . '\',\'' . $db->escape('The user $1 mentioned you in a post in the topic ') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('report_abuse') . '\',\'' . $db->escape('Report abuse') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('send_appeal') . '\',\'' . $db->escape('Send appeal') . '\',\'' . $db->escape('main') . '\')';
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();