=== HashLibs ===
Contributors: maxxsnake
Tags: hash, adlibs, echo, url, query, string, dynamic, page, build
Requires at least: 2.0.2

Dynamically build a page with simple shortcode based on hashed URL values. Ex. Visit josh.dvvvvvvvv.com/#name=Josh or josh.dvvvvvvvv.com/#name=Josh/salutation=Mr. or replace 'Josh' with anything else.

== Description ==

Dynamically build a page with simple shortcode based on hashed URL values.

Ex. Visit josh.dvvvvvvvv.com/#name=Josh or josh.dvvvvvvvv.com/#name=Josh/salutation=Mr. or replace the values with your own. My WordPress page content is simply: Hi [echo-hash salutation] [echo-hash name] - you can use any hash key you like in replace of 'salutation' or 'name' and place as many as you like anywhere in your content that you like.

== Installation ==

1. Activate the plugin through the 'Plugins' menu in WordPress
2. Use the plugin's shortcode [echo-hash param_name] in the content of your pages and posts, replacing 'param_name' with the name of the parameter you wish to display.
3. Use hashes in your URL to display their value in the page.

For instance, if your page URL is http://mysite.com/page/#name=John Doe/age=43, then 'John Doe' will be displayed wherever [echo-hash name] is inserted, and '43'  will be displayed wherever [echo-hash age] is inserted.

== Frequently Asked Questions ==

= What is this for? =

To make magic happen.

== Changelog ==

= 0.5 =
* Created.

== Upgrade Notice ==

= 0.5 =
Created.
