#Sample WP Shortcode
*Learning WordPress code by installing a plugin*

##Usage Example
To use in WordPress post text editor:

`
[sample_shortcode input_1='Windows XP' input_2='Windows 7' input_3='Windows 8']
`

To use it in php file (e.g. theme) use do_shortcode:

`echo do_shortcode("[sample_shortcode input_1='Windows XP']");`
