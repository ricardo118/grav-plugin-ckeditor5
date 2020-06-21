# Ck Editor5 Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **Ck Editor5** Plugin is for [Grav CMS](http://github.com/getgrav/grav). A plugin for CKEditor5 integration to Grav

## Installation

Installing the Ck Editor5 plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install ck-editor5

This will install the Ck Editor5 plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/ck-editor5`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `ck-editor5`. You can find these files on [GitHub](https://github.com/ricardo118/grav-plugin-ck-editor5) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/ck-editor5

> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/ck-editor5/ck-editor5.yaml` to `user/config/plugins/ck-editor5.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the admin plugin, a file with your configuration, and named ck-editor5.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

# Notes

`vendor` folder contains a  copy of `ckeditor5-build-classic.git` and is used for modifying and recompiling the original ckeditor
