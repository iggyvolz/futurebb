<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array();
$lang_insert_data[] = '(\'English\',\'' . $db->escape('searchresults') . '\',\'' . $db->escape('Search results') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('noresults') . '\',\'' . $db->escape('Sorry, your search returned no results.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('keywords') . '\',\'' . $db->escape('Keywords') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('show') . '\',\'' . $db->escape('Show') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('search-undeleted') . '\',\'' . $db->escape('Posts that have not been deleted') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('search-deleted') . '\',\'' . $db->escape('Posts that have been deleted') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('allforums') . '\',\'' . $db->escape('All forums') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('banned') . '\',\'' . $db->escape('Banned') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('bannedmsg1') . '\',\'' . $db->escape('You have been banned from this forum') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('until') . '\',\'' . $db->escape('until') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('bannedmsg2') . '\',\'' . $db->escape('The moderator or administrator that banned you left you with the following message:') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('bannedmsg3') . '\',\'' . $db->escape('To contact the board administrator, you may send an email to <a href="mailto:$1">$1</a>.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('accessdenied') . '\',\'' . $db->escape('Access denied') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('noguests') . '\',\'' . $db->escape('You must log in to view this forum.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('nogroupview') . '\',\'' . $db->escape('You do not have permission to view these forums.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintintro') . '\',\'' . $db->escape('This forum is down for maintenance. The forum administrator said this:') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('maintintro2') . '\',\'' . $db->escape('If you are an administrator and need to log in, you may do so <a href="$baseurl$/login">here</a>.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('profile') . '\',\'' . $db->escape('Profile') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('userlist') . '\',\'' . $db->escape('User list') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('register') . '\',\'' . $db->escape('Register') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('search') . '\',\'' . $db->escape('Search') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('administration') . '\',\'' . $db->escape('Administration') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('logout') . '\',\'' . $db->escape('Log out') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('login') . '\',\'' . $db->escape('Log in') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('poweredby') . '\',\'' . $db->escape('Powered by <a href="http://futuresight.org/products/futurebb">FutureBB</a>') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('403title') . '\',\'' . $db->escape('403 Forbidden') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('403head') . '\',\'' . $db->escape('Ouch...') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('403body1') . '\',\'' . $db->escape('The page "$1" is restricted and you&apos;re not allowed to see it.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('403body2') . '\',\'' . $db->escape('Sorry about that. Why don&apos;t you try <a href="javascript:history.go(-1);">going back to where you were</a>?') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('404title') . '\',\'' . $db->escape('404 Not found') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('404head') . '\',\'' . $db->escape('Oops...') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('404body1') . '\',\'' . $db->escape('The path "$1" was not found on this forum!') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('genericerror') . '\',\'' . $db->escape('<h2>Sorry!</h2><p>The error $1 occurred on the forums. You might want to tell someone in charge if you&apos;ve never seen this before.</p>') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('invalidxml') . '\',\'' . $db->escape('The file you submitted was not valid XML.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('tryagain') . '\',\'' . $db->escape('Try again') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('nolinks') . '\',\'' . $db->escape('You are not allowed to post links.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('noimgs') . '\',\'' . $db->escape('You are not allowed to post images.') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('bracketparam') . '\',\'' . $db->escape('Brackets can not go in parameters, as happened in a <b>[$1]</b> tag') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('closenoopen') . '\',\'' . $db->escape('<b>[/$1]</b> found without opening <b>[$1]</b>') . '\',\'' . $db->escape('main') . '\')';
$lang_insert_data[] = '(\'English\',\'' . $db->escape('expectedfound') . '\',\'' . $db->escape('Invalid tag structure - expected <b>[/$1]</b> and found <b>[/$2]</b>') . '\',\'' . $db->escape('main') . '\')';
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();