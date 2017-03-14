<?php

namespace Html5Gen\Tests;

use Html5Gen\Html5Gen as H;
use PHPUnit\Framework\TestCase;

class Html5GenTest extends TestCase
{
    public function testHtmlDocument()
    {
        $html =
        H::html([], function () {
            H::head();
            H::body();
        });

        $expect = <<<HTML
<!DOCTYPE html>
<html>
<head></head>
<body></body>
</html>

HTML;

        $this->assertEquals($expect, $html);
    }

    public function testScript()
    {

        $html =
        H::html([], function() {
            H::head([]);
            H::body([], function () {
                H::script([], function () {
                    yield 'alert(1);';
                });
            });
        });

        $expect = <<<HTML
<!DOCTYPE html>
<html>
<head></head>
<body><script>alert(1);</script></body>
</html>

HTML;

        $this->assertEquals($expect, $html);
    }
}