[![Continuous Integration](https://github.com/mlocati/concretecms-skeleton/actions/workflows/ci.yml/badge.svg)](https://github.com/mlocati/concretecms-skeleton/actions/workflows/ci.yml)

## Minimal ConcreteCMS Composer Project

This is the minimal project structure you need to have a Composer-based ConcreteCMS project.

## How to use it?

### With a GitHub Repository

If you plan to create a repository on GitHub with this project structure, simply [use this skeleton](https://github.com/new?template_name=concretecms-skeleton&template_owner=mlocati).
After you created your repository, you can remove (or adjust) the directory `/.github` and the files `/LICENSE.txt` and `/README.md`.

### Without a GitHub Repository

Simply [download this .zip file](https://github.com/mlocati/concretecms-skeleton/archive/refs/heads/main.zip) and extract it.

## Configuration

### ConcreteCMS Version

The ConcreteCMS version that will be installed is controlled by the `concrete5/core` defined in the `require` section of the `composer.json`file:

```json
{
    "require": {
        "concrete5/core": "^9"
    }
}
```

That `^9` means *install the [most recent version 9, but not version 10 or later](https://getcomposer.org/doc/articles/versions.md#caret-version-range-)*.  
You can of course adjust it.
For example, if you want to install the exact version `9.4.8`, simply write `"concrete5/core": "9.4.8"`.

### PHP Version

While developing a Concrete site, you may be using a PHP version on your PC that differs from the production one.

This may cause problems: for example you could add a composer dependency that's fine for your development environment, but breaks the production environment.

In order to avoid such problems, we can instruct composer to assume a specific PHP version.

That's done in the `composer.json` file with the following lines:

```json
{
    "config": {
        "platform" : {
            "php" : "7.3"
        }
    }
}
```

You may want to adjust the PHP version so that it reflects the one you use in production.

### Development Environment

You can create a `.env` file in the root directory of your project with this line:

```sh
CCM_ENVIRONMENT=development
```

By doing that, your Concrete installation will load development-specific options, for example:

- session cookies will work with HTTP requests too (not only with HTTPS)
- errors and warnings will always be displayed with full debug information

## Usage

Once you configured the above settings, you can simply download ConcreteCMS and all its dependencies by running

```sh
composer update
```

You then will want to configure your webserver to create a website that points to the `web` directory, and install Concrete in the usual way.
