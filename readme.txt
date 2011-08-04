=== Google Maps Hyperlink ===
Contributors: claudiotereso
Tags: gps, google maps
Requires at least: 2.5
Tested up to: 3.2.1
Stable tag: 1.0

Converts a short link with the format [gmaplink name="description" gps="xºxx.xxxN,xºxx.xxxW"]  to a google maps hyperlink

== Description ==

Description: Converts a short link with the format [gmaplink name="description" gps="xºxx.xxxN,xºxx.xxxW"]  to a google maps query in the format  http://maps.google.com/maps?q=[gps]+([name])

the gps field can be any format that the https://maps.google.com/maps?q= accepts.

I did this in August 2011 to post in my blog my vacation trip. I looked for something like this, and the only one I found was jeffyen's Google Maps GPS link which had some thinks I didn't like about:
- It doesn't use shortcode aPI which I prefer
- The links he uses to google maps goes to nearest "hotspot" not the actual coordinates. To avoid that I added +(...) to the hyperlink.

... so I did mine :)

== Installation ==

1. Upload `gmaphyperlink.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==
= 1.0 =
* First Version.
