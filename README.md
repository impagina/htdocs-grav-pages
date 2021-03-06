# Grav for Impagina: the 

This repository contains the content for the [Grav](https://getgrav.org) based [impagina.org](http://impagina.org) website.

Please refer to:

- <https://github.com/impagina/htdocs-grav-theme> for the theme for the Impagina site.



## Contributing

You can contribute to the content of the [Impagina](http://impagina.org) website by opening issues or making pull requests.

If you want to improve the look and feel, please rever to the [impagina-quark theme](user/themes/impagina-quark/).

## Future plans

Planned features that where we could need some help:

- Add https.
- Remove the gray lines between the main page's modules.
- Simplify the buttons (one file with sections for each button? or one file with sections for all the buttons?... just create a specific module for it)
- Making the site multilanguage and, then, translate the content.
- Provide a concept for getting a regular news stream.
- Create a "Tutorials" page (cf. the link from learn to the forums).
- Fix the spaces between items in the modular pages.
- Review and finish the "tile" grav module item (add the buttons...)
- Test (improve?) and eventually install the font awesome plugin
- Check why the grav's font-awesome icons are not as nice as martin's (wordpress) ones.
- Add the "container" class around the just-text module template... but allow to disable it, when in an horizontal context.
- Publish the Github development manual and link it from the "Developer" button in "Contribute"
- Generally write pages for the "Contribute" section.
- Create a donation page
- Navigation:
  - if we get more items, do not create sub menus but add a "More" item with the futher items.
- A (free) comment engine.
  - grav does have a comment plugin... but it might not easy to moderate without the admin interface



## Remarks

- pages starting with the `00.` number are not published yet (`published: false`).
- pages starting with the `99.` number are not shown in the navigation (`visible: false`).

## Administration

### Clearing the cache

```
./bin/grav clear-cache
```

On a local install, you will probably need to first make the cache writable by the group:

```sh
sudo find cache -type f -exec chmod g+w {} \;
```

## License

- Country flags in "Learn" from <https://github.com/usrz/bootstrap-languages> (Apache License)

## Todo

Pages to be done:

- Add anchors for each platform and version
- Create a plugin for showing markdown documentations from github
  - https://github.com/OleVik/grav-plugin-bibliography
- From the top navigation:
  - showcase
- From the footer
  - Write some code (Contribute)
  - Change the interface (Contribute)
  - Write some docs (Contribute)
  - Report a bug (Contribute, how to use the bug tracker) 
  - Contact (irc, mailing list, address of the team, riot)
  - About (really? rather an impressum?)
  - Donations (has to be setup)
- review the current impagina.org
  - port the planet
    - https://github.com/OleVik/grav-plugin-twigfeeds
  - rescue the newsletter?
  - contribute > your first patch using github
- use spectre css cards for the news: https://picturepan2.github.io/spectre/components/cards.html
- find how to allow the sync script to be an exception in the grav's `.htaccess` security section. currently, i've removed the `.php` filese from the exceptions. (which is not a big issue, since there are no other php files in there)
