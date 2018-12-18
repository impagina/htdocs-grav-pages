# Grav for Impagina

## Contributing

If you want contribute to the impagina.org website, you can:

- Propose new content for the [pages](user/pages/).
- Propose changes to the [impagina-quark theme](user/themes/impagina-quark/)

You can do so by making a pull request or by filling a ticket in this repository.

Planned features that where we could need some help:

- Add https.
- Making the site multilanguage and, then, translate the content.
- Provide a concept for getting a regular news stream.
- Create in grav all the pages linked from the footer.
- Create a "Tutorials" page (cf. the link from learn to the forums).
- Fix the spaces between items in the modular pages.
- Make the headers slimmer.
- Add the Impressum, with the sources for the images
- Review and finish the "tile" grav module item (add the buttons...)
- Test (improve?9 and eventually install the font awesome plugin
- Check why the grav's font-awesome icons are not as nice as martin's (wordpress) ones.
- Add the "container" class around the just-text module template... but allow to disable it, when in an horizontal context.
- Publish the Github development manual and link it from the "Developer" button in "Contribute"
- Generally write pages for the "Contribute" section.
- Create a donation page
- Navigation:
  - if we get more items, do not create sub menus but add a "More" item with the futher items.
- A (free) comment engine.


## Installing

- make sure that your user is in the `www-data` group:  
  `sudo usermod -aG www-data ale`
- make sure that the `httpdocs` belongs to the  `www-data` group and the same for the files created in it:
  - `chgrp www-data httpdocs`
  - `chmod g+s httpdocs`
- get the current grav download (without admin):
  - `cd httpdocs`
    `wget ...`
  - `unzip  grav-*.zip`
- add to the web root an `.htacces` that redirects everything not found to grav:

  ```
  RewriteCond %{REQUEST_URI} !^/grav/
  RewriteRule ^$ /grav [QSA]
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^(.*)$ /grav/$1 [L,QSA]
  ```

  (redirects the root to `grav` then does the same for all non existing files and directories).

- if needed, patch the `grav/.htaccess` file to get it to work (no `if module`...).

- define in the `system.yaml` (does not seem to work):

  ```yaml
  custom_base_url: 'http://impagina.org'

  session:
    path: /
  ```

  and disable the cache.
- follow <https://learn.getgrav.org/advanced/environment-config> to create a `user/ww.impagina.org/config/system.yaml` that sets the develpment `custom_base_url_relative`.

- get the three git repositories:
  - grav-

Resources:

- [Allow subfolder url rewrite](https://github.com/getgrav/grav/pull/896)

## A custom theme

Follow <https://learn.getgrav.org/themes/customization> to create the `impagina-quark` theme with the files:

- `impagina-quark.yaml`
- `blueprints.yaml`
- `images/logo/impagina.png`
- `css/custom.css`

In `impagina-quark.yaml` add:

```yaml
custom_logo:
  - name: 'impagina.png'
custom_logo_mobile:
  - name: 'impagina.png'
```

activate the theme in `user/config/system.yaml`:

```yaml
pages:
  theme: impagina-quark
```

On the development server, disable the cache in `user/config/system.yaml` (also for Twig) and don't forget to enable it for the production site.

Get the Roboto font in 300 and 400 weight + italic.

- patch `templates/modular.html.twig` to allow hero modules to also be inside of the page.

## License

- Country flags in "Learn" from <https://github.com/usrz/bootstrap-languages> (Apache License)

## Todo

Pages to be done:

- From the top navigation:
  - get the news to work correctly
    - check if changing `rewrite_base` in the `.htaccess` does make a difference
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
  - add a license in the footer or in the about
    - "Where not othwerise mentioned, the content is under the CC-BY license."
  - port the planet
  - rescue the newsletter?
  - contribute > your first patch using github

- check that all the images can be used!
  - mail sent to martin
- use spectre css cards for the news: https://picturepan2.github.io/spectre/components/cards.html
