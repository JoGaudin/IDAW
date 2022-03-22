=== Afterlight ===

Contributors: automattic
Tags: white, dark, one-column, fixed-layout, responsive-layout, accessibility-ready, custom-background, custom-header, custom-menu, editor-style, featured-images, flexible-header, rtl-language-support, sticky-post, translation-ready

Requires at least: 4.1
Tested up to: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Afterlight is a monochromatic blog theme with an option for a full-screen background image. Add your favorite background image or color to lend your personal flair.

Afterlight WordPress Theme, Copyright (C) 2015, Automattic
Afterlight is distributed under the terms of the GNU GPL

== Description ==

Afterlight is a monochromatic blog theme with an option for a full-screen background image. Add your favorite background image or color to lend your personal flair.

* Responsive layout
* Custom Background
* Custom Header
* Custom Menu
* Editor Style
* Featured Images
* Flexible Header
* RTL language support
* Sticky Post
* Translation Ready
* Social Links
* Jetpack compatibility for Infinite Scroll, Responsive Videos, Site Logo.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Theme Options ==

Background images in Afterlight scale to fit to your browser window by default. If you refer a patterned background or one that doesn’t stretch, just uncheck the option: "Scale background image" to fit in the Customizer.

By default, the theme has an overlay which darkens the background image to help make the text more readable. To remove it, just uncheck the option: "Add an overlay to background."

== Frequently Asked Questions ==

= Where can I add widgets? =

Afterlight includes one optional widget area in an off-screen panel that appears when the eliipsis icon (three dots) clicked in the header.

= How do I add the Social Links to the sidebar? =

Afterlight allows you display links to your social media profiles, like Twitter and Facebook, with icons.

1. Create a new Custom Menu, and assign it to the Social Links Menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will automatically appear if it's available.

Available icons: (Linking to any of the following sites will automatically display its icon in your social menu).

* Codepen
* Digg
* Dribbble
* Dropbox
* Email (mailto: links)
* Facebook
* Flickr
* Foursquare
* GitHub
* Google+
* Instagram
* LinkedIn
* Pinterest
* Pocket
* PollDaddy
* Reddit
* RSS Feed (URLs with /feed/)
* Spotify
* StumbleUpon
* Tumblr
* Twitch
* Twitter
* Vimeo
* WordPress
* YouTube

Social networks that aren't currently supported will be indicated by a generic share icon.

== Quick Specs ==

1. The main column width is 704px.
2. The sidebar width is 704px.
3. Featured Images are 833px wide.
4. Custom Header Image is 2000px wide by 320px high.

== Changelog ==

= 7 June 2017 =
* Update to add check for whether mediaelement exists before running initialize.
* Update JavaScript that toggles hidden widget area, to make sure new video and audio widgets are displaying correctly when opened.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 21 March 2017 =
* Check for post parent before outputting next, previous, and image attachment information to prevent fatals.

= 2 February 2017 =
* remove from CSS in wp-content/themes/pub
* Add forgotten context and gettext function around comma separators for translators.

= 25 January 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 29 December 2016 =
* clean up retired a8c widget Time Machine styles.

= 16 June 2016 =
* Add a class of .widgets-hidden to the body tag when the sidebar is active; allows the widgets to be targeted by Direct Manipulation.

= 18 May 2016 =
* Add Headstart annotations.

= 12 May 2016 =
* Add new classic-menu tag.

= 3 May 2016 =
* Contact form styling adjustment.
* Adjust style for ads.

= 4 February 2016 =
* Adding author-bio tag, to keep things in sync with the Showcase.

= 14 August 2015 =
* Give more accurate viewport size to layout related JS functions. Also some clean-up code style.

= 10 August 2015 =
* Simplify class to exclude from link :hover/:focus
* Add also an exception for .screen-reader-shortcut
* Improve accessibility -- remove opacity on screen-text-reader link

= 20 July 2015 =
* Preparation for resubmission.

= 14 July 2015 =
* Make sure escape custom header image attributes.
* Always use https when loading Google Fonts. See #3221;

= 8 July 2015 =
* Declare the global post for portfolio meta to avoid php notice.

= 9 June 2015 =
* Fix aria-expanded attribute for sidebar and sidebar toggle.
* Change the sidebar toggle button text accordingly so that it's more specific.

= 8 June 2015 =
* Fix aria-hidden for sidebar and sidebar toggle change correctly.
* Remove navigation role attribute from socila navigation because they are external links.

= 25 May 2015 =
* Add accessibility-ready tag in the readme file.

= 19 May 2015 =
* Add accessibility-ready tag.

= 30 April 2015 =
* Slight edit in the theme description.

= 29 April 2015 =
* Add theme options section in readme.txt.
* Add the blog name as an alt attribute in the custom header image.
* Add back Widont.
* Add a tailing slash to the url added in the last change.
* Add a url to the photographers portfolio in Unsplash.com as a credit.
* Add POT file for the theme.

= 28 April 2015 =
* Small style tweak.
* CSS for RTL.
* Add a separator to the first post with IS.
* Left aligned loader for IS.
* Remove duplicated background image when full-page background is enabled.
* Add an indication for the current page in page links. Also made slight style adjustments to make it look good.
* Apply hover style to `focus` class menu item also.
* Let a dropdown menu with many child menu items overflow on a short page.
* Remove those rules to prevent admin bar being pushed down in mobile.

= 24 April 2015 =
* remove relative positioning from body because this pushed the admin bar in small screens.

= 22 April 2015 =
* New screenshot.
* Lighter overlay.
* Remove underline from the page link.
* Minor
* Overhanging image for large size.
* Shorter option string.
* Correct default argument name.
* Fix background image experience in Customizer.
* Add subpixel rendering for Playfair Display, some cleanup.

= 21 April 2015 =
* Remove codekit cache.
* Remove a debug code.
* Remove unused variable.
* Reset a custom background arguments for WP.com to use the default callback.
* PNG crush
* Initial import

== Credits ==

* Genericons: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Background Image: A photo by Patryk Sobczak (https://unsplash.com/patryksobczak/), licensed under Creative Commons Zero(http://creativecommons.org/publicdomain/zero/1.0/)
