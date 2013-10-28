# n98-magerun module cleanup

This module removes the folder /tmp/magento which is really annoying during development.
The module adds an event listener which will be called after each n98-magerun command.

You need at least n98-magerun version 1.81.0 to use the module.

## Installation

```
$ mkdir -p ~/.n98-magerun/modules
$ cd ~/.n98-magerun/modules
$ git clone git@github.com:netz98/n98-magerun-module-cleanup.git
```
