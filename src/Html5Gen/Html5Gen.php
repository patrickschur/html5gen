<?php

namespace Html5Gen;

/**
 * Class Html5Gen
 *
 * @copyright 2017 Patrick Schur
 * @license https://opensource.org/licenses/mit-license.html MIT
 * @author Patrick Schur <patrick_schur@outlook.de>
 * @package Html5Gen
 *
 * # Root Element
 * @method static html      (array $attrs = [], \Closure $callback = null)
 *
 * # Metadata
 * @method static base      (array $attrs = [])
 * @method static head      (array $attrs = [], \Closure $callback = null)
 * @method static link      (array $attrs = [])
 * @method static meta      (array $attrs = [])
 * @method static style     (array $attrs = [], \Closure $callback = null)
 * @method static title     (array $attrs = [], \Closure $callback = null)
 *
 * # Sections
 * @method static address   (array $attrs = [], \Closure $callback = null)
 * @method static article   (array $attrs = [], \Closure $callback = null)
 * @method static aside     (array $attrs = [], \Closure $callback = null)
 * @method static body      (array $attrs = [], \Closure $callback = null)
 * @method static footer    (array $attrs = [], \Closure $callback = null)
 * @method static header    (array $attrs = [], \Closure $callback = null)
 * @method static h1        (array $attrs = [], \Closure $callback = null)
 * @method static h2        (array $attrs = [], \Closure $callback = null)
 * @method static h3        (array $attrs = [], \Closure $callback = null)
 * @method static h4        (array $attrs = [], \Closure $callback = null)
 * @method static h5        (array $attrs = [], \Closure $callback = null)
 * @method static h6        (array $attrs = [], \Closure $callback = null)
 * @method static nav       (array $attrs = [], \Closure $callback = null)
 * @method static section   (array $attrs = [], \Closure $callback = null)
 *
 * # Grouping
 * @method static blockquote    (array $attrs = [], \Closure $callback = null)
 * @method static dd            (array $attrs = [], \Closure $callback = null)
 * @method static div           (array $attrs = [], \Closure $callback = null)
 * @method static dl            (array $attrs = [], \Closure $callback = null)
 * @method static dt            (array $attrs = [], \Closure $callback = null)
 * @method static figcaption    (array $attrs = [], \Closure $callback = null)
 * @method static figure        (array $attrs = [], \Closure $callback = null)
 * @method static hr            (array $attrs = [])
 * @method static li            (array $attrs = [], \Closure $callback = null)
 * @method static main          (array $attrs = [], \Closure $callback = null)
 * @method static ol            (array $attrs = [], \Closure $callback = null)
 * @method static p             (array $attrs = [], \Closure $callback = null)
 * @method static pre           (array $attrs = [], \Closure $callback = null)
 * @method static ul            (array $attrs = [], \Closure $callback = null)
 *
 * # Text
 * @method static a         (array $attrs = [], \Closure $callback = null)
 * @method static abbr      (array $attrs = [], \Closure $callback = null)
 * @method static b         (array $attrs = [], \Closure $callback = null)
 * @method static bdi       (array $attrs = [], \Closure $callback = null)
 * @method static bdo       (array $attrs = [], \Closure $callback = null)
 * @method static br        (array $attrs = [])
 * @method static cite      (array $attrs = [], \Closure $callback = null)
 * @method static code      (array $attrs = [], \Closure $callback = null)
 * @method static data      (array $attrs = [], \Closure $callback = null)
 * @method static dfn       (array $attrs = [], \Closure $callback = null)
 * @method static em        (array $attrs = [], \Closure $callback = null)
 * @method static i         (array $attrs = [], \Closure $callback = null)
 * @method static kbd       (array $attrs = [], \Closure $callback = null)
 * @method static mark      (array $attrs = [], \Closure $callback = null)
 * @method static q         (array $attrs = [], \Closure $callback = null)
 * @method static rb        (array $attrs = [], \Closure $callback = null)
 * @method static rp        (array $attrs = [], \Closure $callback = null)
 * @method static rt        (array $attrs = [], \Closure $callback = null)
 * @method static rtc       (array $attrs = [], \Closure $callback = null)
 * @method static ruby      (array $attrs = [], \Closure $callback = null)
 * @method static s         (array $attrs = [], \Closure $callback = null)
 * @method static samp      (array $attrs = [], \Closure $callback = null)
 * @method static small     (array $attrs = [], \Closure $callback = null)
 * @method static span      (array $attrs = [], \Closure $callback = null)
 * @method static strong    (array $attrs = [], \Closure $callback = null)
 * @method static sub       (array $attrs = [], \Closure $callback = null)
 * @method static sup       (array $attrs = [], \Closure $callback = null)
 * @method static time      (array $attrs = [], \Closure $callback = null)
 * @method static u         (array $attrs = [], \Closure $callback = null)
 * @method static var       (array $attrs = [], \Closure $callback = null)
 * @method static wbr       (array $attrs = [])
 *
 * # Edits
 * @method static del   (array $attrs = [], \Closure $callback = null)
 * @method static ins   (array $attrs = [], \Closure $callback = null)
 *
 * # Interactive Elements
 * @method static details   (array $attrs = [], \Closure $callback = null)
 * @method static dialog    (array $attrs = [], \Closure $callback = null)
 * @method static menu      (array $attrs = [], \Closure $callback = null)
 * @method static menuitem  (array $attrs = [], \Closure $callback = null)
 * @method static summary   (array $attrs = [], \Closure $callback = null)
 *
 * # Scripting
 * @method static canvas    (array $attrs = [], \Closure $callback = null)
 * @method static noscript  (array $attrs = [], \Closure $callback = null)
 * @method static script    (array $attrs = [], \Closure $callback = null)
 * @method static template  (array $attrs = [], \Closure $callback = null)
 *
 * # Tables
 * @method static caption   (array $attrs = [], \Closure $callback = null)
 * @method static col       (array $attrs = [])
 * @method static colgroup  (array $attrs = [], \Closure $callback = null)
 * @method static table     (array $attrs = [], \Closure $callback = null)
 * @method static tbody     (array $attrs = [], \Closure $callback = null)
 * @method static td        (array $attrs = [], \Closure $callback = null)
 * @method static tfoot     (array $attrs = [], \Closure $callback = null)
 * @method static th        (array $attrs = [], \Closure $callback = null)
 * @method static thead     (array $attrs = [], \Closure $callback = null)
 * @method static tr        (array $attrs = [], \Closure $callback = null)
 *
 * # Forms
 * @method static button    (array $attrs = [], \Closure $callback = null)
 * @method static datalist  (array $attrs = [], \Closure $callback = null)
 * @method static fieldset  (array $attrs = [], \Closure $callback = null)
 * @method static form      (array $attrs = [], \Closure $callback = null)
 * @method static input     (array $attrs = [])
 * @method static label     (array $attrs = [], \Closure $callback = null)
 * @method static legend    (array $attrs = [], \Closure $callback = null)
 * @method static meter     (array $attrs = [], \Closure $callback = null)
 * @method static optgroup  (array $attrs = [], \Closure $callback = null)
 * @method static option    (array $attrs = [], \Closure $callback = null)
 * @method static output    (array $attrs = [], \Closure $callback = null)
 * @method static progress  (array $attrs = [], \Closure $callback = null)
 * @method static select    (array $attrs = [], \Closure $callback = null)
 * @method static textarea  (array $attrs = [], \Closure $callback = null)
 *
 * # Embedded Content
 * @method static area      (array $attrs = [])
 * @method static audio     (array $attrs = [], \Closure $callback = null)
 * @method static embed     (array $attrs = [])
 * @method static iframe    (array $attrs = [], \Closure $callback = null)
 * @method static img       (array $attrs = [])
 * @method static map       (array $attrs = [], \Closure $callback = null)
 * @method static object    (array $attrs = [], \Closure $callback = null)
 * @method static param     (array $attrs = [])
 * @method static picture   (array $attrs = [], \Closure $callback = null)
 * @method static source    (array $attrs = [])
 * @method static track     (array $attrs = [], \Closure $callback = null)
 * @method static video     (array $attrs = [], \Closure $callback = null)
 *
 */
class Html5Gen
{
    /**
     * @var \DOMDocument
     */
    protected static $document;

    /**
     * @var array
     */
    protected static $parentNodes = [];

    private function __construct()
    { }

    private function __clone()
    { }

    /**
     * @param $name
     * @param $arguments
     * @return string
     */
    public static function __callStatic($name, $arguments)
    {
        if (empty(self::$parentNodes))
        {
            $dom = new \DOMImplementation();

            self::$document = $dom->createDocument('', '', $dom->createDocumentType('html'));

            self::$document->preserveWhiteSpace = false;
            self::$document->formatOutput = true;
        }

        $elem = self::$document->createElement($name);

        if (isset($arguments[0]) && is_array($arguments[0]))
        {
            foreach ($arguments[0] as $attrName => $attrValue)
            {
                $attrValue = strval($attrValue);

                if (is_int($attrName))
                {
                    $attrName = $attrValue;
                }

                $elem->setAttribute($attrName, $attrValue);
            }
        }

        if (($lastElem = end(self::$parentNodes)) !== false)
        {
            $lastElem->appendChild($elem);
        }

        if (isset($arguments[1]) && is_callable($arguments[1]))
        {
            self::$parentNodes[] = $elem;
            $retVal = $arguments[1]();

            if (is_iterable($retVal))
            {
                foreach ($retVal as $value)
                {
                    $value = strval($value);
                    $elem->appendChild(self::$document->createTextNode($value));
                }
            }

            array_pop(self::$parentNodes);
        }

        if (!$lastElem)
        {
            self::$document->appendChild($elem);
            return self::$document->saveHTML();
        }

        return $elem->ownerDocument->saveHTML($elem);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::$document->saveHTML();
    }
}