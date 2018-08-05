<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_annoto', language 'en'.
 *
 * @package    filter_annoto
 * @copyright  Annoto Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['filtername'] = 'Filter Annoto';
$string['pluginname'] = 'Filter Annoto';

// Application Setup
$string['setupheading'] = 'Annoto Setup';
$string['clientid'] = 'API key';
$string['clientiddesc'] = 'ClientID is provided by Annoto (keep in secret)';
$string['ssosecret'] = 'SSO secret';
$string['ssosecretdesc'] = 'SSO secret is provided by Annoto (keep in secret)';
$string['scripturl'] = 'Annoto\'s script URL';
$string['scripturldesc'] = 'Provide Annoto\'s script URL here';
$string['demomode'] = 'Demo';
$string['demomodedesc'] = 'Toggle this if you don\'t have API key and SSO secret (discussions will not be saved in demo mode)';

// Application settings
$string['appsetingsheading'] = 'Annoto Settings';
$string['cta'] = 'Call To Action';
$string['ctadesc'] = 'Toggle this if you want to use call to actions';
$string['locale'] = 'Locale';
$string['localedesc'] = 'Choose language (Auto will set per page and course based on Course and User preferences)';
$string['localeauto'] = 'Auto Detect';
$string['localeen'] = 'English';
$string['localehe'] = 'Hebrew';
$string['discussionscope'] = 'Discussions Scope';
$string['discussionscopedesc'] = 'Choose scope of Annoto discussions: private per course (default) or site wide (if same video is used in multiple courses the discussion will be pulic across courses)';
$string['discussionscopesitewide'] = 'Site wide';
$string['discussionscopeprivate'] = 'Private per course';
$string['moderatorroles'] = 'Moderator Roles';
$string['moderatorrolesdesc'] = 'Specify Who is allowed to moderate the discussions (the selected roles should have the following capabilities as a minimum: moodle/comment:delete, moodle/notes:manage, moodle/question:add, moodle/course:manageactivities, moodle/analytics:listinsights)';

// UX preferences
$string['appuxheading'] = 'Annoto UX Preferences';
$string['widgetposition'] = 'Discussion Widget position';
$string['widgetpositiondesc'] = 'Where to place the Discussion widget relative to the player';
$string['widgetpositionright'] = 'Right';
$string['widgetpositionleft'] = 'Left';
$string['tabs'] = 'Tabs';
$string['tabsdesc'] = 'Enable this if you want to use tabs in the discussion widget instead of the menu';

// ACL and scope
$string['aclheading'] = 'Annoto ACL and application Scope';
$string['scope'] = 'All site Scope';
$string['scopedesc'] = 'Choose where you want to allow Annoto plugin: check - all site, uncheck - allow only for ACL list and for allowed pages using Annoto Atto plugin';
$string['acl'] = 'ACL';
$string['acldesc'] = 'List of allowed URLs or Course IDs (please, provide one per line)';

