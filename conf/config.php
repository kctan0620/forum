<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.2.16.9';

// Database
$Configuration['Database']['Name'] = 'vanilla';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';
$Configuration['Debug'] = TRUE;

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Voting'] = TRUE;
$Configuration['EnabledPlugins']['DiscussionPolls'] = TRUE;
$Configuration['EnabledPlugins']['VkAuth'] = FALSE;
$Configuration['EnabledPlugins']['CustomPages'] = TRUE;
$Configuration['EnabledPlugins']['OpenID'] = TRUE;
$Configuration['EnabledPlugins']['GoogleSignIn'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['UserList'] = FALSE;

// Garden
$Configuration['Garden']['Title'] = 'TMT.MY';
$Configuration['Garden']['Cookie']['Salt'] = '92PRML2OQF';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'TMT.MY';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Version'] = '2.2.16.9';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bittersweet';
$Configuration['Garden']['HomepageTitle'] = 'TMT.MY';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['Logo'] = 'S1ZTRTS2ZVXO.jpg';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['DiscussionPolls']['EnableShowResults'] = '1';
$Configuration['Plugins']['DiscussionPolls']['DisablePollTitle'] = FALSE;
$Configuration['Plugins']['VkAuth']['ApplicationID'] = '616336055160402';
$Configuration['Plugins']['VkAuth']['Secret'] = 'a5de8a76ae44fe4a05662b32aeed589b';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';
$Configuration['Routes']['cHJpdmFjeQ=='] = array('plugin/page/privacy-policy', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.2.16.9';

// Last edited by beebee1987 (127.0.0.1)2015-01-20 09:07:39