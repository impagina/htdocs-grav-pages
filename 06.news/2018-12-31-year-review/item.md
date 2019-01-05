---
title: The Scribus 2018 year in review
hero_image: 2018.png
---
## The Scribus 2018 year in review

2018 was a calm year for Scribus. There have been one minor release for both the stable and the development branches, regular bug fixes, and a couple of bigger refactoring efforts.

===

Some of the highlights for 2018 were:

- [Scribus 1.5.4 has been released](https://wiki.scribus.net/canvas/1.5.4_Release), with a few enhancements relating to the color handling and improvements for running Scribus from the command line.
- There has been a regain of interest for the scripting, leading a few new contributors (dockattt, Iam_TJ, gibbz) to submit patches. Missing commands have been added to the API and a few misbehaving ones have been fixed.
- Cédric Gémy's has published [Initiation à Scribus 1.5](https://boutique.flossmanualsfr.net/home/70-initiation-a-scribus-9791090791640.html) for Flossmanuals.
  [![](initiation-a-scribus.png?resize=150)](https://boutique.flossmanualsfr.net/home/70-initiation-a-scribus-9791090791640.html)
  Go and buy it. Or help translating it!
- Norbert has created [Scribus Templates](https://www.scribus-templates.net), a site with dozen of Scribus sample documents.
  [![](scribus-templates.png?resize=300)](https://www.scribus-templates.net)
- On top of fixing bugs, Craig and Jean worked on code improvements that should make Scribus better in the long term:
  - Refactoring efforts to make the Scribus code more readable (return early) and fast (const &)
  - "Moving" to C++ 11 (foreach, nullptr, auto)
  - Fix "clazy" warnings and generally "fight" compilers warning (signed / unsigned, ...)

For 2019 there are a few ongoing projects that could need some care and love:

- One and a half years ago, Martin (with the help of a few forum users) made a proposal for a new Scribus website. It has not been retained by the Scribus team and since I really loved the work he did, I've now created this "Scribus Community Site" based on it.
  It's still in beta stage and contributions are very welcome!
- Cedric's "Scribus 1.5" book is free and it is being translated into English. Further translations would be very welcome!
- More of the IndigoDock UI proposal (Martin again) should get into Scribus.
- Finish the "friendly" API for Scribus plugins.
- Complete and publish the Epub exporter.
- Create a real table of contents based on styles.
- Propose a new scripter engine.

Credits:

- The title images is by GDJ: https://openclipart.org/detail/292438/low-poly-2018-wireframe
