Banana Wordpress Theme
======================

This is a theme meant for fast development for Wordpress sites. This is a WIP but I have a roadmap below that I will be continually updating. My big picture plan is to create something that I will be a *bootstrap like* theme. However, instead of having a shit-ton of redic styles you have to overwrite, it's more of a *fill-in-the-blank*. All the classes and styles will be created, but broked out into very modular componets. Instead of overwriting and hacking, you'll be adding or removing, hence the *fill-in-the-blank*. 

Also, special thanks to @mragray for the awesome Gruntfile.js

Getting Started
---------------

This theme uses Grunt so you'll need to download node.js and install Grunt CLI.

After you have all that rigged up, run

`$ npm install`
`$ grunt`

Check to see if bourbon neat is up to date.

Use `$ grunt scaff` to create a new component. This will create both a php file and an scss file with the name given at the prompt. You will need to manually add the include to the _sass_partials.scss file.

