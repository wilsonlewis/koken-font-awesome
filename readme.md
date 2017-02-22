<p align="center">
    <a href="http://koken.me">
        <img src="http://koken.me/img/koken-logo-head.svg" data-png-fallback="http://koken.me/img/koken-logo-head.png" alt="Koken" width="64" height="64">
    </a>
    <span style="padding:10px;">+</span>
    <a href="http://fontawesome.io">
        <img src="https://cdn-images-1.medium.com/fit/c/120/120/1*_j_3KB9RkxmK6mQ4_YWQAw.png" alt="Font Awesome" width="64" height="64">
    </a>
</p>

## About

A <a href="http://koken.me">Koken</a> plugin to easily add <a href="http://fontawesome.io">Font Awesome</a> icons to any page.

- <a href="http://koken.me">Koken</a> is a CMS focused on photography
- <a href="http://fontawesome.io">Font Awesome</a> is a library of common internet icons

## Installation

Koken does not have a store for 3rd party plugins, so we need to install it manually.

- <a href="http://koken.me/#dlkoken">Install Koken</a>
- Navigate to the plugins folder:

        cd /storage/plugins

- Git clone or download and unzip this package:
        
        git clone https://github.com/wilsonlewis/koken-font-awesome.git
        
- Open a new browser window to login to your admin plugins section: 

        http://yoursite.com/admin/#/settings/plugins

- Click the **Enable** button next to this plugin to enable

## Navigation links

Adding an icon as a navigation link is easy! Just set the title to any Font Awesome identifier.

<p align="center">
    <img src="https://cloud.githubusercontent.com/assets/3818588/23229491/87449a54-f90e-11e6-988f-59e8f23aa12a.png" style="max-width: 200px;">
</p>

## Markup

You can also add icons directly in markup. Just make sure the Font Awesome identifier is in it's own tag:

        <a href="">fa-instagram</a>

        <div>
            fa-instagram
        </div>

## License

This plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).