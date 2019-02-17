# utrakJson - JSON Debug Display

[![Latest Stable Version](https://poser.pugx.org/utrak/modules/v/stable)](https://packagist.org/packages/utrak/modules)
[![Total Downloads](https://poser.pugx.org/utrak/modules/downloads)](https://packagist.org/packages/utrak/modules)
[![Latest Unstable Version](https://poser.pugx.org/utrak/modules/v/unstable)](https://packagist.org/packages/utrak/modules)
[![License](https://poser.pugx.org/utrak/modules/license)](https://packagist.org/packages/utrak/modules)


utrakJson is a JSON debugger module to show debug information when a debug flag is set

## Installation

Install the latest version with

```bash
$ composer require utrak/modules
```

## Basic Usage

```php
<?php

use utrakmodules\utrakjson;

// create a json 
$utrakJson = new utrakjson();

// add records to the log
$utrakJson->setJsonData(JsonData);
$utrakJson->displayJson();

```


### Submitting bugs and feature requests

Bugs and feature request are tracked on [GitHub](https://github.com/paulsheldon/utrakModules/issues)


### Author

Paul Sheldon - <paulsheldon1966@gmail.com> <br />

### License

utrakJson is licensed under the MIT License - see the `LICENSE` file for details

### Acknowledgements

