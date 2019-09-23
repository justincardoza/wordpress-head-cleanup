# WordPress plugin: <head> cleanup

This plugin removes a lot of the default markup which isn’t needed for most
professional blogs from the head section of a site. I wrote it as a quick and
dirty way of making my personal website more efficient and secure. These are the
elements that the plugin removes:

* REST API links added by the rest_output_link_wp_head action
* Meta generator tag with exact WordPress version added by the wp_generator action
* Windows Live Writer metadata added by the wlwmanifest_link action
* XML-RPC link for third-party software added by the rsd_link action
* Shortlink added by wp_shortlink_wp_head action (you can still use shortlinks without this)
* Adjacent post links added by adjacent_posts_rel_link_wp_head action
* Prefetch hints added by wp_resource_hints action
* Emoji styles and scripts

None of these are things I really need on my website (especially emojis), and
some, like the WordPress version, could be harmful from a security standpoint.

I'm releasing this under the ISC license for anyone who wants to use it in
their own websites or modify it for their own purposes. I may at some point
publish it on wordpress.org, but more likely I will write a configurable
plugin based on the same idea at some point.

In any case, installing it from here is very simple: just put head-cleanup.php
into a head-cleanup folder under your wp-content/plugins folder and then
activate the plugin in the admin interface. Or, even easier, clone the GitHub
repository into your plugins folder and then activate.
