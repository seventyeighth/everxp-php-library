# EverXP PHP Library

Ever XP offering millions of diffrent combinations for your site to deliver the best user exprience for your websites' visitors.

## How this package will help you?

The EverXP PHP library helps developers to easily connect to Ever XP API, through the integration you can:
* Pull Patterns combinations
* Pull Quotes combinations
* Pull Date & Time combinations

## Installation

You can install the package via composer:

```bash
composer require everxp/php
```

Or you can download the "src" folder and manually add it to your project, you will need to include EverXP before you can use it:
```bash
require_once("your_path/Headings.php");
```

## Usage

``` php
$everxp = new \EverxpHeadings\Headings(array("api_key" => "_YOUR_API_KEY_"));

    $heading = $this->everxp->xp_pattern([
        'pattern' => 11,
        'lang' => 'en',
    ]);
```