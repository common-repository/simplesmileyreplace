=== SimpleSmileyReplace ===
Contributors: brokenlibrarian
Donate link: http://brokenlibrarian.org/tinyplugins/
Tags: comments, smilies
Requires at least: 3.3.1
Tested up to: 4.0
Stable tag: 1.0
License: Apache v2

== Description ==

SimpleSmileyReplace is a plugin that checks for the existence of a _images/smilies/_ folder in a theme. If that folder exists, WordPress uses the smiley files in that folder instead. The plugin assumes that the smilies have the usual filenames (_icon_rolleyes.gif_, etc).

It has no extra requirements and has been tested with modified versions of the twentyten through twentyfourteen themes.

Development on this plugin has halted. Other developers should feel free to use the Apache-licensed code for their own projects.

http://brokenlibrarian.org/tinyplugins/  
brokenlibrarian@gmail.com  
09/28/14

== Installation ==

1. Create a folder named _/wp-content/themes/[ThemeName]/images/smilies/_ and put a complete set of custom smilies in it, with the standard WordPress filenames.
2. Upload the SimpleSmileyReplace folder to your _/wp-content/plugins/_ folder and activate it.
3. No further configuration is required. The smiley codes and filenames are unaltered, only the location of the files is changed.

== Frequently Asked Questions ==

= What are the standard WordPress filenames? =

An up-to-date list of smilies and filenames can be found in _/wp-includes/functions.php_ by searching for the _$wpsmiliestrans_ variable. As of WordPress version 3.5, this is the list (cut-and-pasted):

`
		':mrgreen:' => 'icon_mrgreen.gif',
		':neutral:' => 'icon_neutral.gif',
		':twisted:' => 'icon_twisted.gif',
		  ':arrow:' => 'icon_arrow.gif',
		  ':shock:' => 'icon_eek.gif',
		  ':smile:' => 'icon_smile.gif',
		    ':???:' => 'icon_confused.gif',
		   ':cool:' => 'icon_cool.gif',
		   ':evil:' => 'icon_evil.gif',
		   ':grin:' => 'icon_biggrin.gif',
		   ':idea:' => 'icon_idea.gif',
		   ':oops:' => 'icon_redface.gif',
		   ':razz:' => 'icon_razz.gif',
		   ':roll:' => 'icon_rolleyes.gif',
		   ':wink:' => 'icon_wink.gif',
		    ':cry:' => 'icon_cry.gif',
		    ':eek:' => 'icon_surprised.gif',
		    ':lol:' => 'icon_lol.gif',
		    ':mad:' => 'icon_mad.gif',
		    ':sad:' => 'icon_sad.gif',
		      '8-)' => 'icon_cool.gif',
		      '8-O' => 'icon_eek.gif',
		      ':-(' => 'icon_sad.gif',
		      ':-)' => 'icon_smile.gif',
		      ':-?' => 'icon_confused.gif',
		      ':-D' => 'icon_biggrin.gif',
		      ':-P' => 'icon_razz.gif',
		      ':-o' => 'icon_surprised.gif',
		      ':-x' => 'icon_mad.gif',
		      ':-|' => 'icon_neutral.gif',
		      ';-)' => 'icon_wink.gif',
		       '8O' => 'icon_eek.gif',
		       ':(' => 'icon_sad.gif',
		       ':)' => 'icon_smile.gif',
		       ':?' => 'icon_confused.gif',
		       ':D' => 'icon_biggrin.gif',
		       ':P' => 'icon_razz.gif',
		       ':o' => 'icon_surprised.gif',
		       ':x' => 'icon_mad.gif',
		       ':|' => 'icon_neutral.gif',
		       ';)' => 'icon_wink.gif',
		      ':!:' => 'icon_exclaim.gif',
		      ':?:' => 'icon_question.gif',
`

== Screenshots ==

None.

== Changelog ==

= 1.0 =
* Final version with WordPress v4.0 testing

= 0.5.1 =
* update for WordPress 3.8 compatibility testing

= 0.5 =
* update for WordPress 3.5 compatibility testing

= 0.4 =
* readme and source code cleanup, no other changes

= 0.3 =
* initial release

== Upgrade Notice ==

= 1.0 =
* Final version with WordPress v4.0 testing

= 0.5.1 =
* update for WordPress 3.8 compatibility testing

= 0.5 =
* update for WordPress 3.5 compatibility testing

= 0.4 =
* optional update, code cleanup, no changes

= 0.3 =
* initial release

== License ==

   Copyright 2014 Christian Wagner

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.