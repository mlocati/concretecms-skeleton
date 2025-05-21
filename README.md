## Minimal ConcreteCMS Composer Project

This is the minimal project structure you need to have a Composer-based ConcreteCMS project.


### Development Environment

You can create a `.env` file in the root directory of you project with this line:

```sh
CCM_ENVIRONMENT=development
```

By doing that, your Concrete instation will load development-specific options, for example:

- session cookies will work with HTTP requests too (not only with HTTPS)
- errors and warnings will always be displayed with full debug information


### PHP version

While developing a Concrete site, you may be using a PHP version that differs from the production one.

This may cause problems: for example you could add a composer dependency that's fine for your development environment, but breaks the production enviromnent.

In order to avoid such problems, we can instruct composer to assume a specific PHP version.

That's done in the `composer.json` file with the following lines:

```
{
    "config": {
        "platform" : {
            "php" : "7.3"
        }
    }
}
```

You may want to adjust the PHP version so that it reflects the one you use in production.
