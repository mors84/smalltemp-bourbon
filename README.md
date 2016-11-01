# Smalltemp

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/mors84/smalltemp-bourbon/master/LICENSE)
[![GitHub release](https://img.shields.io/badge/release-v.1.0.0-brightgreen.svg)](https://github.com/mors84/smalltemp-bourbon/releases)


## About Smalltemp - bourbon

Template for small project based on simple and lightweight mixin library for Sass - [Bourbon](https://github.com/thoughtbot/bourbon). In the structure there are files that could help you start front-end project.


## Why php files are in the front-end project?

Split a file into header and footer files will help you build multi pages website. As you wish, include all php files to one index.html and work in static page. If you desire working in php, install Apache HTTP Server or other web server software in your computer.

Warning: Install PHP 7+ or change a constant to variable in meta content. Array values in define constant are allowed in PHP v7.0.0.

## What's included

```
smalltemp-bourbon/
├── css/
│   ├── main.css
│   └── main.css.map
├── fonts/
├── img/
├── js/
│   ├── vendors/
│   │   ├── jquery.min.js
│   │   └── modernizr-custom.js
│   └── main.js
├── scss/
│   ├── base/
│   │   ├── _breakpoints.scss
│   │   ├── _normalize.scss
│   │   └── _typography.scss
│   ├── components/
│   │   ├── _buttons.scss
│   │   ├── _forms.scss
│   │   ├── _lists.scss
│   │   ├── _media.scss
│   │   └── _tables.scss
│   ├── helpers/
│   │   └── _variables.scss
│   ├── layout/
│   │   └── _layout.scss
│   ├── vendors/
│   │   ├── bourbon/...
│   │   └── neat/...
│   └── main.scss
├── .htaccess
├── 404.php
├── footer.php
├── header.php
├── humans.txt
├── index.php
├── robots.txt
└── sitemap.xml

```


## Version files

* bitters v1.4.0
* bourbon v5.0.0.beta.6
* jquery v3.1.1
* modernizr v3.3.1
* neat v1.8.0
* normalize v5.0.0


## Change log

**v1.0.0 - 31 October, 2016**
* initial release


## License

MIT License. Copyright (c) 2016 Smalltemp.
