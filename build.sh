#!/bin/bash -ex

APP=hazdev-ng-template
DIST_DIR=dist/$APP
PROJECT_DIR=projects/$APP/

## build the project using angular-cli (bundles assets)
ng build --prod ${APP};

## copy assets into npm package
cp -rv ${PROJECT_DIR}/src/assets ${DIST_DIR}/.;

## package for local development
cd ${DIST_DIR};

## gzip angular bundle
npm pack;
