## Introduction

Binder is a bundle for Laravel (http://laravel.com) that helps you organize your macros, custom validators, etc. with ease.

## Installation

Simply add the following to your application's `bundles.php`:

```
'binder' => array(
    'auto' => true
),
```

## Usage

You can use Binder's "binders" directory to organize your files. There is already an `example.binder.php` file within this directory for you to use as a starting point.

If you want to organize your files outside of Binder you will need to add this to your application's `start.php`:

```
Binder::init('app');
```

The above example assumes you're storing your files in `/application/binders/`.

Note: Files **must** end with the `.binder.php` extension. Any file that does not contain this extension will not be loaded by Binder.

### Shorthand Syntax

If you only have one Closure to bind within your file all you have to do is the following:

```
return array(
	'html flash' => function()
	{
		// HTML::flash() functionality
	},
);
```
