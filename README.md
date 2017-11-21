# Inhabitent Theme

A WordPress theme for Inhabitent webpage, starter theme forked from red academy.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `inhabitent` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## Features
* Custom taxonomy (product type) using WordPress Hierarchy
* Custom widget area using CFS
* Custom page template for the about page
* Search icon toggle effect using jQuery

## Author
**Qingxin Yuan**

## What I learned from the project
* Building a WP custom theme is very SCSS heavy, but the feature of using mixins and variables in sass makes it a bit simpler and less repetitive.
* Each WP page has its designated class name for styling purpose
* WP hierarchy and CodeX have becoming good friends for documentation and reference (for example, index.php is the fall back of all pages if not specified in other php file according to the hierarchy naming convention)

## Acknowledgement
* Thanks Rose and Jim for WP programming tips and advice
* Thanks red academy for project material preparation
