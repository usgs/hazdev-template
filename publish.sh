#!/bin/bash -e

APP=hazdev-ng-template
DIST_DIR=dist/$APP
PROJECT_DIR=projects/$APP/

## build the project using angular-cli (bundles assets)
npm run build

## copy assets into npm package
cp -r $PROJECT_DIR/src/assets $DIST_DIR/.

## package for local development
cd $DIST_DIR

## gzip angular bundle
npm pack

## publish for deployment
#npm publish

## serve the app
ng serve

echo "done!"
