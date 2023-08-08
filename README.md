# PHP-Code-Quality-Playground

## Running this project
This project uses DDEV.

Follow the [installation instructions](https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/) and then run `ddev start`

## Get things working with PHPStorm
[View Guide](./docs/phpstorm.md)

## Overview
I'm using this repo as a playground for testing code quality tools.

Specifically:
- How do they work?
- How are they configured?
- What changes will they make to files?****
- What is the PHPStorm integration like?
- How do I integrate them with Git Hooks?
- What does this look like in a CI/CD pipeline?

## Installed Tools

### Laravel Pint
[GitHub Repo](https://github.com/laravel/pint)

Laravel Pint is an opinionated PHP code style fixer for minimalists. Pint is built on top of PHP-CS-Fixer and makes it simple to ensure that your code style stays clean and consistent.

#### Try it out
```shell
# Prints a diff of changes that will happen
ddev composer run-script pint-check

# Apply fixes
ddev composer run-script pint-fix
```

### PHP CS Fixer
[GitHub Repo](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)

#### Try it out
```shell
# Prints a diff of changes that will happen
ddev composer run-script php-cs-fixer-check

# Apply fixes
ddev composer run-script php-cs-fixer-fix
```

#### Note on setup process
I didn't particularly love the installation instructions that recommended adding a separate directory/composer file for this tool. extra directory & composer feels dirty. But I get the reasoning ([see comment](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer/discussions/6866#discussioncomment-5446130)). That comment also mentions the shim version. That's what I've used for this demo.

```shell
composer install php-cs-fixer/shim
```

### PHP ECS (Easy Coding Standards)

[GitHub Repo](https://github.com/easy-coding-standard/easy-coding-standard)

- I like the PHP file based config
- This is what Craft CMS uses. They already have a configuration.
- Supposed to run really fast, have caching,
- 🚫 No PHPStorm Support

#### Try it out
```shell
# Prints a diff of changes that will happen
ddev composer run-script ecs-check

# Apply fixes
ddev composer run-script ecs-fix
```

### PHP CodeSniffer
[GitHub Repo](https://github.com/squizlabs/PHP_CodeSniffer)

#### Try it out 
```shell
# Prints a diff of changes that will happen
ddev composer run-script php-codesniffer-check

# Apply fixes
ddev composer run-script php-codesniffer-fix
```
