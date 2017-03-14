html5gen
=
[![Build Status](https://travis-ci.org/patrickschur/html5gen.svg?branch=master)](https://travis-ci.org/patrickschur/html5gen)
[![codecov](https://codecov.io/gh/patrickschur/html5gen/branch/master/graph/badge.svg)](https://codecov.io/gh/patrickschur/html5gen)
[![Version](https://img.shields.io/packagist/v/patrickschur/html5gen.svg?style=flat-square)](https://packagist.org/packages/patrickschur/html5gen)
[![Maintenance](https://img.shields.io/maintenance/yes/2017.svg?style=flat-square)](https://github.com/patrickschur/html5gen)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.5-FF.svg?style=flat-square)](http://php.net/)
[![License](https://img.shields.io/packagist/l/patrickschur/html5gen.svg?style=flat-square)](https://opensource.org/licenses/MIT)

An easy to use HTML5 generator written in PHP. Creates valid and secure HTML5 code.

## Installation
To install the library I would recommend to use Composer. Execute the following command
```bash
$ composer require patrickschur/html5gen
```
or add this to your `composer.json`
```json
{
  "require": {
    "patrickschur/html5gen": "*"
  }
}
```
Because the script is not really big you could also copy the `Html5Gen.php` out of the `src` folder to use the script without Composer.

## Usage
```php
require 'vendor/autoload.php';
 
use Html5Gen\Html5Gen as H; // shorthand
 
echo
H::html([], function() {
    H::head();
    H::body();
});
```
outputs:
```html
<!DOCTYPE html>
<html>
<head></head>
<body></body>
</html>
```

#### Attributes
All elements have one thing in common, all of them expect attributes.
That is also the reason why it is the first parameter of all methods.
You can specify attributes by an array. Where the key is the name of the attribute and the value the attribute value.
If you do not want to specify attributes, leave the array empty.
You can also omit the array if you do not use a callback.
```php
echo
H::html(['lang' => 'en', 'dir' => 'ltr'], function() {
    H::head();
    H::body([], function () {
        H::p(['class' => 'foo bar']);
    });
});
```
outputs:
```html
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head></head>
<body><p class="foo bar"></p></body>
</html>
```

#### Callbacks
The second and last parameter is the a callback function defined by the user.
This lets you write a more generic code and allows the nesting of elements.
With the `yield` keyword it is possible to write text into the current element without terminating the function.
> Notice: Elements like `base`, `br`, `meta`, `area`, `input`, `wbr`, `hr`, `link`, `param`, `source`, `col` and `img` can not have a callback, only attributes.

```php
echo
H::html([], function() {
    H::head([], function () {
        H::meta(['charset' => 'UTF-8']);
    });
    H::body([], function ()
    {
        foreach (range(0, 10) as $number) {
            H::p([], function () use ($number) {
                yield $number;
            });
        }
    });
});
```
outputs:
```html
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<p>0</p>
<p>1</p>
<p>2</p>
<p>3</p>
<p>4</p>
<p>5</p>
<p>6</p>
<p>7</p>
<p>8</p>
<p>9</p>
<p>10</p>
</body>
</html>
```

#### Automatically Escaped Values
The script will automatically detect if it is useful to escape a value or not.
For example if you want to define a `script` tag, it would not be useful to escape, because that destroys the logic of a script.
But if you use a `pre` tag it makes much more sense to escape the value. Also works for attributes.

```php
echo
H::html([], function() {
    H::head([]);
    H::body([], function () {
        // A really bad attribute value
        H::pre(['id' => '"\'"'], function () {
            yield '<script>alert(1);</script>'; // maybe some user code?
        });
        
        // Be careful with that and do not use user code in it
        H::script([], function () {
            yield 'var x = Math.floor(Math.random() * 100);';
            yield 'alert(0 < x < 100);';
        });
    });
});
```
outputs:
```html
<!DOCTYPE html>
<html>
<head></head>
<body>
<pre id="&quot;'&quot;">&lt;script&gt;alert(1);&lt;/script&gt;</pre>
<script>var x = Math.floor(Math.random() * 100);alert(0 < x < 100);</script>
</body>
</html>
```

#### [TODO] Checklist:
- [ ] Exists the attribute for the element?
- [ ] Is the given attribute value allowed for the specified attribute?
- [ ] Is the element allowed in the current element?
- [ ] Check the document for bad practices. For example duplicate id references.
- [ ] Check the `nonce` and `integrity` attribute on the correctness.

## Contributing
Feel free to contribute. Any help is welcome.

## License
This projects is licensed under the terms of the MIT license.