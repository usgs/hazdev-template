hazdev-template
===============

Lightweight php template framework


## Using the template

- [Overview](docs/overview.md)
- [Page Configuration](docs/pageConfiguration.md)
- [PHP Variables](docs/phpVariables.md)
- [PHP Functions](docs/phpFunctions.md)
- [SCSS Content Patterns](docs/scssPatterns.md)


## Installing the template

- [Site Configuration](docs/siteConfiguration.md)
- [SCSS Variables](docs/scssVariables.md)
- [Embedding the hazdev-template in another project](docs/embedding.md)


## Working on the hazdev-template project:

### Dependencies:

1. Node, NPM
2. Sass, Compass
3. PHP-CGI 5.4+

### Getting Started:

1. Install NPM dependencies

    `npm install`

2. Install Bower dependencies

    `bower install`

3. Preview in a browser

    `grunt`

    On windows, `gateway` has trouble resolving default documents and you need to change the opened url to `http://localhost:8080/index.php`.

### Example usage

The `example` directory shows an example usage of the template:

* css/index.scss defines css variables, and includes the template sass partial
* _config.inc.php configures site wide settings
* _navigation.inc.php configures left navigation
* index.php includes the template

