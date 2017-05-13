=== Easy Logo ===
Contributors: (imvarunkmr)
Donate link: https://www.paypal.me/imvarunkmr
Tags: logo, effects, center logo, logo management
Requires at least: 3.0.1
Tested up to: 4.7.4
Stable tag: 1.9.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows the end user to upload a new logo or use an existing image from your WordPress media gallery as a logo.

== Description ==

This plugin helps in managing your WordPress website's logo.
You can easily upload a new logo, or use an existing image in your WP media  gallery.
Multiple features are provided such as:

* Applying hover effects to your logos.

* Making the logo responsive

* Uploading and using the retina version of your logo.

To see some samples [visit the plugin support page ](http://varunk.co/plugins/easylogo/ "WordPress plugins by Varun")

== Changelog ==

= 1.9.1 =
* Fixed bug in responsive logo settings where logo appears huge
* Tested upto WordPress 4.7.4

= 1.9 =
* Fixed [user reported bug related to responsive logo in firefox](https://wordpress.org/support/topic/logo-not-responsive-on-firefox-mobile/)
* Tested upto WordPress 4.7.3

= 1.8 =
* Fixed [user reported bug](https://wordpress.org/support/topic/getting-e-l-to-work-in-twenty-fourteen/)
* Tested upto WordPress 4.6.1

= 1.7 =
* Fixed Undefined Index Notices
* Updated Plugin header

= 1.6 =
* Added option to link logo to custom URL

= 1.5 =
* Added feature to center your logo
* Bug fixes

= 1.4 =
* Fixed issue with updated hover effects library

= 1.3 =
* Fixed “headers already sent error” caused by upgrade 1.2
* Updated CSS Hover effects library to latest version
* Minor Changes in HTML output

= 1.2 =
* Fixed a minor bug as pointed by user in support forums [here](https://wordpress.org/support/topic/jumping-menu-in-admin-bar)

= 1.1 =
* Fixed compatibility issues with latest media uploader

== Upgrade Notice ==
= 1.6 =
* Added option to link logo to custom URL

= 1.5 =
* Added feature to center your logo
* Bug fixes

= 1.4 =
* Fixed issue with updated hover effects library

= 1.3 =
* Fixed “headers already sent error” caused by upgrade version 1.2
* Updated CSS Hover effects library to latest version
* Minor Changes in HTML output

= 1.2 =
Upgrade if you are facing issues with WordPress admin bar on your website
= 1.1 =
Upgrade if your media gallery buttons are no longer working after WordPress upgrade

== Screenshots ==

1. This is the screenshot of main settings page of this plugin. You can customise the settings as per your convenience.
2. An example for adding easylogo in twentysixteen theme.

== Installation ==

1. Open header.php file of your current theme.
2. Paste `<?php show_easylogo(); ?>` where you want to display your logo.
3. Please comment out your existing logo for future.

In case you find difficulties in setting up your plugin, feel free to write an email to easylogo@varunk.co


== Frequently Asked Questions ==

= Why my logo appears so big? =

If your logo appeears to be bigger than it needs to be, make sure to uncheck the "make logo responsive option" in settings

= Will extra stylesheets will be added even if I don't select any hover effect? =

Absolutely not. If you select no hover effect i.e 'none', sylesheets won't be added to your site. Similarly if you don't opt for the retina version of your logo retina.js will not be added.

= Can I use this plugin to insert other images in my website =

At the moment unfortunately no. I will be working on this in future upgrades
