=== Plugin Name ===
Contributors: bouncyoy
Tags: readmore, readless, 
Tested up to: 5.9
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
Read more button to insert anywhere.
 
== Description ==
 
Simple plugin that allows you to insert read more button to anywhere on your site. With the plugin you can hide part of the text, so that it opens from a read more button and hides it again from a read less button.

** Read more with Bouncy - Features: **

* Fully customizable by using additional css
* You can name the buttons as you wish
* Unlimited read more buttons

How to use:

(just delete ' and Paragraph & Shortcode are just mentioned to notify you which block is used)
Screenshots below this sections will show plugin usage in live.

Use case 1 - no line breaks
﻿
Paragraph:
'[readmorec readmorecontent="hidden1"]'Hidden section. In order to make line break, please do use html as shown below'[/readmorec]'

Shortcode:
'[readmoreb readmore="hidden1"]'
﻿


Use case 2 - line breaks (Reminder, br-tags are written inside <>)
﻿
Paragraph:
'[readmorec readmorecontent="hidden2"]'Hidden section. In order to make line breaks, use html mode and br-tags as follows _br_ one line break(br-tag between words follows and one) _br_br_ 
(Two br-tags between words one and gap) gap between and button to bottom of the text (next and the last br-tag sets the read more button at the bottom of the text) _br_ '[/readmorec]'

 

Shortcode:
'[readmoreb readmore="hidden2"]'
﻿


Use case 3 - translated button text
﻿
Paragraph:
'[readmorec readmorecontent="hidden3"]'Hidden section
'[/readmorec]'

Shortcode:
'[readmoreb readmore="hidden3" label="write here what you want to show in readmore button" translatedlabel="and here same for the less button"]'

  
== Frequently Asked Questions ==
 
= Can I change button style? =
 
Yes, you can modify the button as you like with css. For example to change font size, insert following to the additional css (delete '):

'.readmore-btn{
	font-size: 50px
}'

= Can I translate the button? =
 
Yes, just write what you like in the shortcode section that's reserved for the button naming, example (delete '):

'[readmoreb readmore="uniqueid" label="write here what you want to show in read more button" translatedlabel="and here same for the less button"]'

== Screenshots ==

1. Instructions
 
== Changelog ==
 
= 1.0 =
* Plugin publish