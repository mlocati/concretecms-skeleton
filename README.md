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

### PHP version

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

### PHP-CS-Fixer

The `composer.json` file contains this section:

```json
{
    "require-dev": {
        "friendsofphp/php-cs-fixer": "...",
        "sebastian/diff": "..."
    }
}
```

That's required by the `c5:phpcs` CLI command, useful for checking/fixing the PHP syntax.

If you don't plan to use it (or if you don't even know what it's all about) you can simply remove that whole `require-dev` section.


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
