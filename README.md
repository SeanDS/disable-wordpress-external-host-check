# Disable WordPress external host check
Disable WordPress's external host check security feature to allow sideloading media etc. from a local machine.

When you import media from another WordPress (or different platform), the files are retrieved over
HTTP using WordPress's WP_Http class. This provides a unified interface for retrieving files, but
is also in some cases unnecessarily restrictive on what constitutes a valid URL. For example,
network hosts defined on the `127`, `10`, `0`, `172` or `192.168` IP blocks are automatically
considered to be "local" and therefore rejected, which rules out sideloading media from another
host on the network with such an IP. This is true also for hosts which resolve to those IP
ranges. The relevant source code is part of [`wp_http_validate_url`](https://developer.wordpress.org/reference/functions/wp_http_validate_url/).

This plugin simply disables the IP block check, so that all URLs, even local ones, are allowed
regardless of the IP address.

Note that this does not disable other security features which check for malformed URLs, exposed
passwords, ports other than `80`, `443` and `8080`, etc.

## Credits
Sean Leavey  
https://github.com/SeanDS  
wordpress@attackllama.com