<?php
/*
Plugin Name: SimpleSmileyReplace
Plugin URI: http://brokenlibrarian.org/tinyplugins/simplesmileyreplace/
Description: Replaces standard smilies with ones from a theme folder
Version: 1.0
Author: Christian Wagner
Author URI: http://brokenlibrarian.org/tinyplugins/
License: Apache v2
*/
?>
<?php
/*
   Copyright 2012 Christian Wagner

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/
?>
<?php

function simple_replace_smilies_src ($img_src, $img, $siteurl) {
	return get_bloginfo('template_url').'/images/smilies/'.$img;
	}

if (file_exists(get_theme_root().'/'.get_template().'/images/smilies/')) {
	add_filter('smilies_src','simple_replace_smilies_src',1,10);
	}

?>