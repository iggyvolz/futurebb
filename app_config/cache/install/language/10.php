<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array (
  0 => '(\'English\',\'redirmsg\',\'If you are not redirected within a few seconds, <a href=\\"$1\\">click here</a> to continue.\',\'admin\')',
  1 => '(\'English\',\'updatingtopic\',\'Updating topic #$1\',\'admin\')',
  2 => '(\'English\',\'updatingforum\',\'Updating forum #$1\',\'admin\')',
  3 => '(\'English\',\'reparsingposts\',\'Reparsing posts - now is a good time to get off the computer for a little while. :)\',\'admin\')',
  4 => '(\'English\',\'reparsingpost\',\'Reparsing post #$1\',\'admin\')',
  5 => '(\'English\',\'reparsingsigs\',\'Reparsing signatures - now is a good time to get off the computer for a little while. :)\',\'admin\')',
  6 => '(\'English\',\'reparsingsig\',\'Reparsing signature #$1\',\'admin\')',
  7 => '(\'English\',\'rebuildingsearch\',\'Rebuilding search index - now is a good time to get off the computer for a little while. :)\',\'admin\')',
  8 => '(\'English\',\'procpost\',\'Processing post #$1\',\'admin\')',
  9 => '(\'English\',\'updatingpostcounts\',\'Updating user post counts - now is a good time to get off the computer for a little while. :)\',\'admin\')',
  10 => '(\'English\',\'recountinguser\',\'Recounting user #$1\',\'admin\')',
  11 => '(\'English\',\'recountingtopicreplies\',\'Recalculating topic reply counts - now is a good time to get off the computer for a little while. :)\',\'admin\')',
  12 => '(\'English\',\'maintenancedesc\',\'From this page, you can run the various maintenance utilities necessary to help keep your forum working.\',\'admin\')',
  13 => '(\'English\',\'rebuildsearch\',\'Rebuild search index\',\'admin\')',
  14 => '(\'English\',\'rebuildsearchdesc\',\'If there are problems searching, you can rebuild the search index.\',\'admin\')',
  15 => '(\'English\',\'deleteorphans\',\'Delete orphaned topics\',\'admin\')',
  16 => '(\'English\',\'deleteorphansdesc\',\'If you are ever getting a message saying a topic has no posts in it, run this utility to remove all of them.\',\'admin\')',
  17 => '(\'English\',\'updatelastpost\',\'Update topic/forum last post data\',\'admin\')',
  18 => '(\'English\',\'updatelastpostdesc\',\'If the last post data in topics and forums appears to be invalid, run this tool to fix it.\',\'admin\')',
  19 => '(\'English\',\'reparse\',\'Reparse\',\'admin\')',
  20 => '(\'English\',\'reparsedesc\',\'This forum pre-parses BBCode, meaning that the BBCode is converted into HTML at the time of posting/editing the post. This means that any changes to BBCode will not affect old posts. If you have added new BBCode and want to apply it on old posts, you should run this utility.\',\'admin\')',
  21 => '(\'English\',\'reparseposts\',\'Reparse all posts\',\'admin\')',
  22 => '(\'English\',\'reparsesigs\',\'Reparse all signatures\',\'admin\')',
  23 => '(\'English\',\'updatecounts\',\'Update counts\',\'admin\')',
  24 => '(\'English\',\'updateuserpostcounts\',\'Update user post counts\',\'admin\')',
  25 => '(\'English\',\'updateforumpostcounts\',\'Update forum post counts\',\'admin\')',
  26 => '(\'English\',\'updateforumtopiccounts\',\'Update forum topic counts\',\'admin\')',
  27 => '(\'English\',\'updatetopicpostcounts\',\'Update topic post counts\',\'admin\')',
  28 => '(\'English\',\'defaultusergroup\',\'Default user group:\',\'admin\')',
  29 => '(\'English\',\'newusergroup\',\'Create new user group\',\'admin\')',
  30 => '(\'English\',\'groupname\',\'Group name\',\'admin\')',
  31 => '(\'English\',\'groupnamedesc\',\'This is the title of the group itself.\',\'admin\')',
  32 => '(\'English\',\'usertitle\',\'User title\',\'admin\')',
  33 => '(\'English\',\'usertitledesc\',\'This will show up under a user&apos;s username in their posts.\',\'admin\')',
  34 => '(\'English\',\'editpostsdesc\',\'This option allows users to edit their own posts.\',\'admin\')',
  35 => '(\'English\',\'deletepostsdesc\',\'This option allows users to delete their own posts.\',\'admin\')',
  36 => '(\'English\',\'modprivs\',\'Moderator privileges\',\'admin\')',
  37 => '(\'English\',\'modprivsdesc\',\'This option gives users access to the moderator tools, which include being able to edit and delete everybody&apos;s posts, ban users, and view deleted posts.\',\'admin\')',
  38 => '(\'English\',\'adminprivs\',\'Administrator privileges\',\'admin\')',
  39 => '(\'English\',\'adminprivsdesc\',\'This option gives users access to the complete admin panel.\',\'admin\')',
);
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();