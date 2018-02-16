#!/bin/bash -e

ANGULAR_BUILD=dist
NPM_BUILD=npm-dist

## build the project using angular-cli (bundles assets)
npm run build

## compile for npm release
npm run packagr

## copy assets into npm package
cp -r $ANGULAR_BUILD/assets $NPM_BUILD/src/.

## package for local development
cd $NPM_BUILD
npm pack

## publish for deployment
#npm publish

echo "done!"