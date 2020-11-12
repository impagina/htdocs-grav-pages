---
title: Scribus 1.5.6 Released
hero_image:
---
## Scribus 1.5.6 Released

Scribus 1.5.6 has been released yesterday.

A lot of small bugs have been reported and fixed; on top of it, Scribus 1.5.6 brings several interesting improvements and new features.

As you probably know, the latest major stable release of Scribus is now almost 10 years old and the latest minor stable releases do not run any more on many up to date computers (Ubuntu and most other Linuxes, macOS).

Despite Scribus 1.5.6 being a development release, there is not much stopping your from using it for production work.  
But there are a few things you need to pay attention to:

- Scribus 1.4.x cannot open files that have been saved with Scribus 1.5.x. So, if you want to test 1.5.6, do so on copies of your documents. There is no way back (but you can install both Scribus 1.4 and 1.5 on the same computer).
- In Scribus 1.5.4, a new text layout engine has been introduced: there can be small changes in the way your text flows. When opening old files, you need to check the hyphenation / line breaks, and look for text overflows or underflows.
- While Scribus 1.5.6 is probably the most stable version of Scribus ever released, it has some dark areas, that you might want to avoid or use with care. Please read the section below, about the experimental features in this release.

### What has been fixed?

Lot of bugs have been fixed. But there are a few areas that have been specifically taken care of:

- the coverage and correct working of undo actions.
- the support for HiDPI, multiple monitors, and dark themes.
- the support for complex, RTL, and CJK  languages (mainly Arabic and Malayalam).

If you want to know if specific bugs has been fixed, please refer to the [official bug tracker](https://bugs.scribus.net).

### The content palette

Probably, the most visible new feature is the context-sensitive Content Palette.

Several panels of the Properties palette have been moved to a new window, that now automatically adapts to the type of item currently select.

You can activate it in the "Windows" menu, and dock it on the right side of your Scribus window. Or just use the F3 shortcut to show or hide it.

### PDF preview and printing

Scribus has been using Ghostscript for importing and exporting Postscript files but also for printing and for the preview of the printing characteristics ("File > Print preview").

Jean has now implemented a new PDF based engine that allows PDF-based printing and preview.

You can now preview selected printing features for different PDF _workflows_ (CMYK plates, ink coverage, ...).

### The action search

We have not covered the release of 1.5.5 (if you read the [official release notes](https://wiki.scribus.net/canvas/1.5.5_Release) you will see that it's mostly unspectacular), but one feature is worth to be mentioned: you can now search through all Scribus menus and then trigger the command.

Just press Ctrl-/ !

On the one side, you can now find where the commands are, by typing words that you think should be related to them.

On the other side, this new feature allows you to quickly start commands without using the mouse.  
Of course, it's still worth using the pre-defined keyboard shortcuts, but now you have a valid alternative to adding more and more  complex custom shortcuts for those commands that are used less often (as an example you can type Ctrl-/ and then "samp" to insert a sample text into a text frame).

### Scripting

First, the big news: Scribus is now using Python 3 (except on MacOS which still has Python 2).  
If you have followed good practices in the Python 2.7 branch, your scripts will still be ok, otherwise, some tweaking will be needed.  
Of course, the scripts distributed with Scribus have been ported to work with Python 3.

We have had several new people starting using the Python Scripter and they discovered bugs and many missing commands in the Scripter API: the result is that we have now a much better Scripter!

Probably, the most important improvements concern the applying, detection and definition of formats and styles.  
But many commands have been added and more complex scripts should now be possible.

Ale has created a web version of the Scripter API documentation, built using the available docstrings: [The Scribus Python interface module](https://impagina.org/scribus-scripter-api/) on [impagina.org](https://impagina.org).  
How is it done? A Python script [exports all docstring to Markdown](https://github.com/aoloe/scribus-script-repository/tree/master/export-scripter-api) and the documentation can then be published as static Html with mkdocs.

### More new features

Scribus 1.5.6 is not a small release! Here a few more features that have been added:

- Multiple duplicate on pages: This should allow you to avoid the automatic text frames for most use cases.
- Snapping guides to items: Very handy for creating master pages!
- Scribus can now export to PDF 1.6, including embedded OpenType fonts.
- Code has been added for importing Markdown files. It's still a bit rough around the edges, but it's a good start!
- The importing of IDML, PDF, SVG files has also been improved.
- Selecting items in some peculiar situation is now easier (Ctrl/Cmd+Click selects items below guides, "cycle" through the items in a group with Alt+Ctrl/Cmd+Click)
- Default black and white colors can now alternatively be defined in RGB and LAB.

### The code

There are also some news about the Scribus code itself.

- C++ 11 and Qt 5.14 are now required.
- A big effort has been made to clean up the code, using modern C++ syntax and remove compiler warnings (and dead code).

### What is still experimental?

While this Scribus release can be considered stable, there are parts of it that are still experimental and should be _handled with care_:

- Footnotes, Lists, Marks:they have much improved, but those features cannot yet be described as stable. You're welcome to test them, but please check thoroughly if they fit your needs, before starting using them in production.
- Drop shadows.
- Tables: this is a special case: technically, they work as specified. But in most (if not all) cases you're better off by using tabs or importing a table from an external program (as SVG, PDF or PNG).
- Undo: It mostly works, and no document breakage have been reported in a long time. But there are still commands that cannot be undone. In doubt, hands off the Ctrl-z!

Luckily enough, bug in those features will only affect you if you use them and they should not affect the overall stability of Scribus.

### The final notes...

Thanks to everybody has contributed to this release.

The [complete changelog](https://bugs.scribus.net/changelog_page.php?version_id=110) is available in the [bug tracker](https://bugs.scribus.net) and you can find the [official release notes](https://wiki.scribus.net/canvas/1.5.6_Release) in the [Wiki](https://wiki.scribus.net).
