hazdev-template
===============

Lightweight php template framework


- [Template Site Configuration](docs/siteConfiguration.md)
- [Template Page Configuration](docs/pageConfiguration.md)
- [PHP Template Variables](docs/phpVariables.md)
- [PHP Template Functions](docs/phpFunctions.md)
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


### Example usage

The `test` directory shows an example usage of the template:

* css/index.scss defines css variables, and includes the template sass partial
* _config.inc.php configures site wide settings
* _navigation.inc.php configures left navigation
* index.php includes the template

