# Grav for Impagina

This repository contains the content for the [Grav](https://getgrav.org) based [impagina.org](http://impagina.org) website.

It's the main repository for the Impagina site.

Please refer to:

- [htdocs-grav-theme](https://github.com/impagina/htdocs-grav-theme) for the theme.
- [htdocs-grav-config](https://github.com/impagina/htdocs-grav-config) for the config files.

## Contributing

If you want contribute to the Impagina website, you can:

- Propose new content for the [pages](user/pages/).
- Propose changes to the [impagina-quark theme](user/themes/impagina-quark/)

You can do so by making a pull request or by filling a ticket in this repository.

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


## Installing

Instructions for setting up the Impagina server or a local development instance:

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
- syncing with the github repository with a webhook:
  - add to the beginning of the security section in the Grav `.htaccess`:

    ```
    RewriteCond %{REQUEST_URI} !^/user/pages/sync/?$
    RewriteCond %{REQUEST_URI} !^/user/themes/sync/?$
    RewriteCond %{REQUEST_URI} !^/user/config/sync/?$
    ```

### Deploy on the metanet server

- Activate the ssh access in the "Web Hosting Access" section (it should be the first one).
- `ssh impagina@impagina.org -p 2121`
- wget the grav zip file (it will be saved to `1.5.x` and you will have to rename it to `grav.zip`.
- Move the `security.yaml` out of `config`, `git clone https://github.com/impagina/htdocs-grav-config.git config`, and move `security.yaml` back in.
- `git clone https://github.com/impagina/htdocs-grav-theme.git impagina-quark` in the themes.
- Delete the `pages` directory and replace it with the git repository: `git clone https://github.com/impagina/htdocs-grav-pages.git pages`
- Copy the `secret.txt` in each `sync` directory.
- Remove the restriction for `.php` files in the `.htaccess`
- Disable the ssh access.

Resources:

- [Allow subfolder url rewrite](https://github.com/getgrav/grav/pull/896)

## Remarks

- pages starting with the `00.` number are not published yet (`published: false`).
- pages starting with the `99.` number are not shown in the navigation (`visible: false`).

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
  - rescue the newsletter?
  - contribute > your first patch using github
- use spectre css cards for the news: https://picturepan2.github.io/spectre/components/cards.html
- find how to allow the sync script to be an exception in the grav's `.htaccess` security section. currently, i've removed the `.php` filese from the exceptions. (which is not a big issue, since there are no other php files in there)
