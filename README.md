# Hazdev Angular Template
Angular version of the hazdev template.


## Getting Started:
-------------------

How to preview the project in your browser:

1. Install NPM dependencies
    ```
    npm install
    ```

1. Preview in a browser
    ```
    ng serve -o
    ```
    The application should open (flag -o) in your browser.


## Building
-----------

This project is intended to be deployed as an NPM package. Building in this
sense requires packaging the application from the Angular source code, and
then publishing that package to npm [hazdev-template](https://www.npmjs.com/package/hazdev-template).

### NPM Publish Geoserve Components

Build/Publish the npm distributable from the Angular source using the `ng` command line
tool.

```
$ ng run npm-publish
```

The `ng run npm-publish` runs a script that bundles the npm package into a tar file that is fully distributable. The tar file can be imported by running a local npm install:

```
$ npm install hazdev-template
```

However, the tar file should be tagged and pushed to npm to facilitate more widespread consumption:
```
npm publish npm-dist/hazdev-template-<version>.tgz --tag <version>
```


## Using the Hazdev Angular Template
------------------------------------
Follow these steps to wrap your application in the hazdev angular template. 

1. install the earthquake-geoserve-ui project (the tarball from step 1)
    ```
    npm install hazdev-template
    ```
1. include the assets from the npm package in your `.angular-cli.json` (this should be done by the project importing the earthquake-geoserve-ui project).
    ```
    {
      "glob": "**/*",
      "input": "../node_modules/hazdev-template/src/assets",
      "output": "./assets/"
    },
    ```
1. import the `HazdevAngularTemplateComponent` into `app-module.ts`, from the hazdev-template project.
    ```
    import { HazdevAngularTemplateComponent } from 'hazdev-template';
    ```
1. Add google fonts (Roboto and Merriweather) to the project
    ```
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Roboto+Mono:400|Merriweather:400,400italic,700|Material+Icons" rel="stylesheet">
    ```
1. Use the normal TITLE, NAVIGATION, SITE_SITENAV, SITE_COMMONNAV template variables to configure your template.
1. Wrap your application with the `app-hazdev-template` component that was imported with the `HazdevTemplate`.
    ```
    <app-hazdev-template
      [TITLE]="TITLE"
      [NAVIGATION]="NAVIGATION"
      [SITE_SITENAV]="SITE_SITENAV"
      [SITE_COMMONNAV]="SITE_COMMONNAV"
    >
    ... your application's entry point component ... 
    </app-hazdev-template>
    ```



## General Angular Information
---------------------------

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 1.5.5.

### Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

### Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

### Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `-prod` flag for a production build.

### Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

### Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

### Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).
