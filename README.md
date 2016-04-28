# HTML Demo & Gulp Boilerplate

The repository has two purposes. The first is to demo the HTML and CSS naming convention we hope to use across all our projects. The second is to provide a Gulp boilerplate.

This readme, the naming convention and the Gulp file are all work-in-progress and will improve and evolve over time. I strongly encourage input from all the developers - feel free to make changes or pull requests if necessary.

## Getting Started

You need Gulp installed globally:
```
npm install -g gulp
```
Then from the project/theme root run:
```
npm install
```

## HTML Naming convention

We're using a combination of BEM, OO CSS and ITCSS.

The aim is to write modular CSS and HTML and by using a common naming system, we can see links between elements, which might not be obvious at first.

## Gulp
The default `gulp` command will run the following tasks:

* Compile all Sass files found within */sass* into */css*
* Add sourcemaps to allow browser dev tools to link the compiled CSS rules to their original Sass line numbers
* Automatically add browser prefixes where necessary
* Detect JS errors and potential problems (JSHint)
* Display the final CSS file size
* Watch for Sass/CSS/JS changes


The `gulp bs` command runs exactly the same tasks but also runs BrowserSync. This requires changing settings within *gulpfile.js*


`gulp sprite` creates *sprite.png* and *sprite@2x.png* from individual pngs found in */images/sprites/*. It also generates *_sprites.scss* and compresses the final png.


`gulp prod` will run the following tasks:

* Compile and minify the CSS
* Create the sprite
* Check the JS for errors
* Strip out *console.log* messages
* Concatenate all JS files found in */js/src* to *script.min.js*

## Coming soon

SVG Sprites

Much more detail