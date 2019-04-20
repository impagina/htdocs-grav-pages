---
title: Serious Game cards deck
hero_image_block: true
hero_link_start: false
hero_image: resilientweb.png
---

Deck of 30 Cards for Sustainable Business Innovation

===

Helping small and medium enterprises _innovating for a more sustainable business_ was the aim of the Interreg IVB ResilieNtWEB* project, between 2010 and 2015.

One of the project outcomes is a deck of cards illustrating 30 sustainable innovation principles based on [biomimicry](https://biomimicry.org/what-is-biomimicry/), transposing Nature innovation principles to business innovation.

Each cards has attractive visuals with different colors schemes (to distinguish innovation types), changing explanation texts, drawings and pictures, shade levels, visual links to other cards in the deck, dynamic QR code, and more dynamic content, all translated in 3 different languages (EN, FR, NL).

![](Resilience-Design-Guide_GB_cards1.png?class=showcase-preview) ![](Resilience-Design-Guide_GB_cards2.png?class=showcase-preview) ![](ResilientWeb-DeckMaterial.png?class=showcase-preview) 

The complete card deck is made available for your own use by the [ResilieNtWEB consortium](http://www.nweurope.eu/about-the-programme/our-impact/challenge-2/the-resilientweb-project/) in [English](https://drive.google.com/open?id=17EjBIRPtdN2prDXXhzLkk1vgPC610ieu), [French](https://drive.google.com/open?id=1SQF1AJ0zIdRCTXcyCe8hnkTT_XF7I-RN) and [Dutch](https://drive.google.com/open?id=1SwWBm7J-wYIEY9kvHl_bDJuVqTg7ixWG) under [Creative Commons BY-NC-ND 2.0](https://creativecommons.org/licenses/by-nc-nd/2.0/). 


Scribus and template engine
---

Scribus was elected as DTP software for its ability to produce quality PDF content, scripting potential, its working well with opensource formats (incl. SVG), and being opensource. A template engine was developped for the needs of this project, now available (and maintained) as the opensource [Scribus Generator}(https://github.com/berteh/ScribusGenerator). Its demo video gives a short overview of some basic use:

<a href="https://www.youtube.com/watch/kMsRn38TOiQ" rel="ScribusGenerator how to"><img src="https://raw.githubusercontent.com/berteh/ScribusGenerator/master/pic/screencast.png" alt="Scribus Generator how to" style="max-width:100%;"></a>


Workflow 
---

The workflow to update this deck, maintained and improved by a small team of 7 across 4 borders is a typical asynchronous story:

- the content of the card is maintained in an online (Google) spreadsheet, for its ability to directly be exported as CSV with proper UTF-8 encoding, and to add comments and discussions flows in particular table cells. Translation work is shared amongst the different writers.
- graphic artists create and update the needed visual items (drawings, icons,...) online
- tech team set up a redirection service to provide for meaningful QR code URL shortcuts to related business cases, tips, tools and more... and generate the QR code images dynamically.
- at deck release time, the CSV for the deck in each language is downloade and fed to the Scribus Generator, that directly inserts the online static graphic assets, dynamic QR codes and all text and visual elements into a single SLA file.
- the SLA are checked for errors or problems using Scribus PDF validation features, and then exported to PDFs. After a few revisions the PDF validation step became unnecessary and [PDF generation was automated](https://github.com/aoloe/scribus-script-repository/tree/master/to-pdf).


Moreover the project
---

The [final brochure of the ResilieNtWEB project](https://drive.google.com/open?id=1w7chuiH66gSWM3oKdVKM2zbumHV7j9FD) gives a bit more context and contact information, for the interested reader.

Additional outcomes include a complete toolkit for business innovation, business cases repository, community of users and more.

Symbioville, a serious game for sustainable innovation, has been developped to help businesses and students apply the biomimicry-based innovation principles in their business strategy design, in combination with the Business Model Canvas and other relevant tools. 
