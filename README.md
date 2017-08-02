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

3. Preview in a browser

    `grunt`

    On windows, `gateway` has trouble resolving default documents and you need to change the opened url to `http://localhost:8080/index.php`.

### Example usage

The template comes with a styleguide providing examples:

* css/index.scss defines css variables, and includes the template sass partial
* _config.inc.php configures site wide settings
* _navigation.inc.php configures left navigation
* index.php includes the template


## Containers/Docker

- Build container

```
docker build -t usgs/hazdev-template:latest .
```

- Run container
```
docker run --rm -p 8000:80 -e EXPOSE_HOST=127.0.0.1 -e EXPOSE_PORT=8000 -e MOUNT_PATH=/theme usgs/hazdev-template:latest
```

- Once the container is running, open the following URL in a web browser:
	http://localhost:8000/theme

- Custom PHP scripts can use the template by mounting them in the document root `/data/www/html`
