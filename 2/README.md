README
======

The question
------------

**"Create a liquid layout with HTML, CSS, and Javascript. This layout must support the following resolutions: 1024x768, 1680x1050. Explain why you would use a liquid layout."**

What is a liquid layout?
------------------------

Elements in a liquid layout (or at least the parent elements) have their widths defined relative to the viewport. Typically, these are defined in percentages.

This is in contrast to a fixed-width layout, where widths are typically defined in terms of pixels.

Why use a liquid layout (and limitations)
-----------------------------------------

###The web is not print media / Supporting multiple user-agents

The web is not like print-media. A website can be accessed by a wide-variety of devices, with different screen resolutions, pixel densities, and other supported features. Liquid designs are better able to cater for a wider-range of devices than a fixed-width design because, in a limited way, they adapt to the user-agent (namely, the width). In this way, they can make better use of the available screen real estate, avoiding horizontal scrolling or, in the case of a very wide screen, large areas of unused space.

However, liquid layouts represent only a partial attempt to adapt to different user-agents and viewport-sizes. A multi-column layout, even if liquid, will likely be unusable at very low viewport widths unless aspects other than the width also adapt.

Recently, more comprehensive approaches to being 'device-agnostic' have emerged. 'Responsive' and 'Adaptive' designs use CSS media queries (or perhaps Javascript) to adapt or respond to the user-device. So, for example, in the two-column layout mentioned earlier, a more sensible approach might be to collapse down to one column (stacking the old columns vertically, or perhaps hiding some) as the screen approaches narrower resolutions. We may also want to change the text or image sizes - or, perhaps, even serve smaller images (in terms of filesize) if we suspect that lower-resolution devices will in general have slower internet access.*

*This is not necessarily true in the USA/UK anymore, but is almost certainly the case when we consider users from other parts of the world, India and China for example.

Our approach and reasoning behind it
------------------------------------

The 'TF2-inspired' design we have created is both liquid *and* responsive. It uses flexible widths but also uses CSS media-queries to respond to the user-agent by changing the number of columns, image size, and other aspects of the design. It is also HTML5. The colour scheme is inspired by [Solarized](http://ethanschoonover.com/solarized) by Ethan Schoonover.

**Alter the width of your browser window to try it out!**

Note: no attempt has been made to support older browsers - in particular, versions of IE before IE9 do not natively support media queries. If IE support was required, we could either provide a separate IE-specific stylesheet, or use a Javascript library such as [css3-mediaqueries-js](http://code.google.com/p/css3-mediaqueries-js/) to replicate the functionality.