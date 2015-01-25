# John.

## What is John?
John is a github repo dependency generator for normal people. It aims to ease the creation of Github projects and getting a head start. It's simple, fast and flexible.

## Install

### Windows / Mac / Linux

* Make sure you have php 5.4.

* Add  `c:\path-to-john\bin;`  to the `$PATH` variable.<br />
<strong>That's literally it!</strong>

## Usage
Once the project is added to the path you made it available globally. This means you can go to any directory and call the command john.

To create a gitignore or license file run:

```bash
$ john gitignore Composer # The gitignore files are typed in CamelCase
$ john license mit # Whereas th license files are all lower case
```
This creates a .gitignore file for Composer and a mit license.

## Files available
The .gitignore files are copied form [this](https://github.com/github/gitignore) repository. While the license files are from my own repo [here](https://github.com/BenLowery/license).

## Similair projects
* [joe](https://github.com/karan/joe).

* [generator-gi](https://github.com/rorotikamobile/generator-gi).

* [Forgitter](https://github.com/cloudspace/forgitter).

## The rest

### Versioning
Because this is a relatively small project i've started at 0.9 to allow a short beta period. Apart form this, i'm following SemVar.

### Contributing
I'm currently open to any changes, big or small. If you want to fix a bug, create an issue before you make a pull request.

### Todo
* custom README generator, with yeoman style questioning
* inclusion of whoops, a error handler
* directory structure generator
