# Grav Filter Strings Plugin

**Filter Strings** is a [Grav](http://github.com/getgrav/grav) plugin that utilizes [Stringy](https://github.com/danielstjules/Stringy) to manipulate strings in twig templates. 

# Installation

**Filter Strings** can be installed in two different ways; Our Grav Package Manager (GPM) install method is the easiest and most reliable method. However, the plugin can also be installed via a zip file.

## GPM Installation (Preferred)

Utilizing the system terminal the plugin can be installed from root.
In the system terminal navigate (change directories) to the root of the Grav project. Type in the following command:

    bin/gpm install filterStrings

The command will install the plugin under the `/user/plugins` directory in Grav.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `filterStrings`. You can find these files either on [GitHub](https://github.com/getgrav/grav-plugin-filterStrings) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/filterStrings


# Usage

In order to use the **Filter Strings** plugin it needs to be enabled in the configuration files. By default **Filter Strings** is enabled. To call the plugin from twig use a pipe `|` and a function name (List of functions can be found in [Stringy](https://github.com/danielstjules/Stringy)) followed by an underscore and string (eg: `SomeStringVariable|titleize_string`)

> Note: Currently only Stringy functions that modify a string without arguments work. Other modifiers have not been tested.