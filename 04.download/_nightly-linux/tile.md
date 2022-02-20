---
title: Nightly Scribus 1.5.x for Linux
fa_icon: fa-linux logo pull-left
---

Normally, we are producing nightly builds of the Scribus main branch but, currently, the newest Scribus code cannot easily be built on Linux: The team decided to start the migration of Scribus Qt 6 and there are no Qt 6 packages available for Debian or Ubuntu, yet.

For the near feature we will track the development of the 1.5.x branch and then next stable version 1.6 which should be the next release.

A Gitlab Continous Integration Job produces an Appimage _each time_ the developers push a new commit:

[![pipeline status](https://gitlab.com/scribus/scribus16/badges/main/pipeline.svg)](https://gitlab.com/scribus/scribus16/commits/main)  
<i class="fa fa-download" aria-hidden="true"></i> [Appimage (64 bit)](https://gitlab.com/scribus/scribus16/-/jobs/artifacts/main/raw/Scribus-nightly-x86_64.AppImage?job=appimage%3Alinux)

The Gitlab Continous Integration Job for the main branch is still being synced but the creation of the AppImage fails:

[![pipeline status](https://gitlab.com/scribus/scribus/badges/master/pipeline.svg)](https://gitlab.com/scribus/scribus/commits/master)  
<i class="fa fa-download" aria-hidden="true"></i> [Appimage (64 bit)](https://gitlab.com/scribus/scribus/-/jobs/artifacts/master/raw/Scribus-nightly-x86_64.AppImage?job=appimage%3Alinux)


For Ubuntu a [PPA is available](https://launchpad.net/~scribus/+archive/ppa?target=_blank). The nightly build is called `scribus-trunk`.
