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
     * @param string $name
     * @param array $arguments
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
            self::validateTagsAndAttributes($elem->tagName, $arguments[0]);

            foreach ($arguments[0] as $attrName => $attrValue)
            {
                $attrValue = strval($attrValue);

                if (is_int($attrName))
                {
                    $attrName = $attrValue;
                }

                if (self::isVisible($elem->tagName, $attrName, $attrValue) ||
                    $attrValue != false && $attrValue != "false")
                {
                    $elem->setAttribute($attrName, $attrValue);
                }
            }
        }

        if (($lastElem = end(self::$parentNodes)) !== false)
        {
            $lastElem->appendChild($elem);
        }

        if (isset($arguments[1]) && is_callable($arguments[1]))
        {
            self::$parentNodes[] = $elem;
            $retVal = $arguments[1]($elem);

            if ($retVal instanceof \Traversable)
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

    private static function isVisible($elem, $attrName, $attrValue)
    {
        $html = new \DOMDocument();

        $elem = $html->createElement($elem);
        $elem->setAttribute($attrName, $attrValue);
        $html->appendChild($elem);

        if ($attrValue && strpos($html->saveHTML(), $attrValue) !== false) {
            return true;
        }

        return false;
    }

    /**
     * @param string $tag
     * @param array &$attrs
     * @throws \InvalidArgumentException if there was found a not supported element
     * @return void
     */
    private static function validateTagsAndAttributes($tag, &$attrs)
    {
        $globalAttrs = [
            'accesskey',
            'class',
            'contenteditable',
            'contextmenu',
            'dir',
            'draggable',
            'dropzone',
            'hidden',
            'id',
            'itemid',
            'itemprop',
            'itemref',
            'itemscope',
            'itemtype',
            'lang',
            'spellcheck',
            'style',
            'tabindex',
            'title',
            'translate',
            'onabort',
            'onautocomplete',
            'onautocompleteerror',
            'onblur',
            'oncancel',
            'oncanplay',
            'oncanplaythrough',
            'onchange',
            'onclick',
            'onclose',
            'oncontextmenu',
            'oncuechange',
            'ondblclick',
            'ondrag',
            'ondragend',
            'ondragenter',
            'ondragexit',
            'ondragleave',
            'ondragover',
            'ondragstart',
            'ondrop',
            'ondurationchange',
            'onemptied',
            'onended',
            'onerror',
            'onfocus',
            'oninput',
            'oninvalid',
            'onkeydown',
            'onkeypress',
            'onkeyup',
            'onload',
            'onloadeddata',
            'onloadedmetadata',
            'onloadstart',
            'onmousedown',
            'onmouseenter',
            'onmouseleave',
            'onmousemove',
            'onmouseout',
            'onmouseover',
            'onmouseup',
            'onmousewheel',
            'onpause',
            'onplay',
            'onplaying',
            'onprogress',
            'onratechange',
            'onreset',
            'onresize',
            'onscroll',
            'onseeked',
            'onseeking',
            'onselect',
            'onshow',
            'onsort',
            'onstalled',
            'onsubmit',
            'onsuspend',
            'ontimeupdate',
            'ontoggle',
            'onvolumechange',
            'onwaiting'
        ];

        switch ($tag)
        {
            case 'html':
            case 'head':
            case 'title':
            case 'address':
            case 'article':
            case 'aside':
            case 'body':
            case 'footer':
            case 'header':
            case 'h1':
            case 'h2':
            case 'h3':
            case 'h4':
            case 'h5':
            case 'h6':
            case 'nav':
            case 'section':
            case 'blockquote':
            case 'dd':
            case 'div':
            case 'dl':
            case 'dt':
            case 'figcaption':
            case 'figure':
            case 'hr':
            case 'main':
            case 'p':
            case 'pre':
            case 'ul':
            case 'abbr':
            case 'b':
            case 'bdi':
            case 'bdo':
            case 'br':
            case 'cite':
            case 'code':
            case 'dfn':
            case 'em':
            case 'i':
            case 'kbd':
            case 'mark':
            case 'rb':
            case 'rp':
            case 'rt':
            case 'rtc':
            case 'ruby':
            case 's':
            case 'samp':
            case 'small':
            case 'span':
            case 'strong':
            case 'sub':
            case 'sup':
            case 'noscript':
            case 'u':
            case 'var':
            case 'wbr':
            case 'template':
            case 'caption':
            case 'col':
            case 'colgroup':
            case 'table':
            case 'tbody':
            case 'tfoot':
            case 'thead':
            case 'tr':
            case 'datalist':
            case 'picture':
            case 'iframe':
            case 'legend':
                break;
            case 'base':
                $globalAttrs[] = 'href';
                $globalAttrs[] = 'target';
                break;
            case 'link':
                $globalAttrs[] = 'crossorigin';
                $globalAttrs[] = 'href';
                $globalAttrs[] = 'hreflang';
                $globalAttrs[] = 'integrity';
                $globalAttrs[] = 'media';
                $globalAttrs[] = 'prefetch';
                $globalAttrs[] = 'referrerpolicy';
                $globalAttrs[] = 'rel';
                $globalAttrs[] = 'sizes';
                $globalAttrs[] = 'type';
                break;
            case 'meta':
                $globalAttrs[] = 'charset';
                $globalAttrs[] = 'http-equiv';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'content';
                break;
            case 'style':
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'media';
                break;
            case 'li':
                $globalAttrs[] = 'value';
                break;
            case 'ol':
                $globalAttrs[] = 'reversed';
                $globalAttrs[] = 'start';
                $globalAttrs[] = 'value';
                break;
            case 'a':
                $globalAttrs[] = 'download';
                $globalAttrs[] = 'href';
                $globalAttrs[] = 'hreflang';
                $globalAttrs[] = 'referrerpolicy';
                $globalAttrs[] = 'rel';
                $globalAttrs[] = 'target';
                $globalAttrs[] = 'type';
                break;
            case 'data':
                $globalAttrs[] = 'value';
                break;
            case 'q':
                $globalAttrs[] = 'cite';
                break;
            case 'time':
                $globalAttrs[] = 'datetime';
                break;
            case 'ins':
            case 'del':
                $globalAttrs[] = 'cite';
                $globalAttrs[] = 'datetime';
                break;
            case 'dialog':
            case 'details':
                $globalAttrs[] = 'open';
                break;
            case 'menu':
                $globalAttrs[] = 'label';
                $globalAttrs[] = 'type';
                break;
            case 'menuitem':
                $globalAttrs[] = 'checked';
                $globalAttrs[] = 'command';
                $globalAttrs[] = 'default';
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'icon';
                $globalAttrs[] = 'label';
                $globalAttrs[] = 'radiogroup';
                $globalAttrs[] = 'type';
                break;
            case 'summary':
                break;
            case 'canvas':
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'width';
                break;
            case 'script':
                $globalAttrs[] = 'async';
                $globalAttrs[] = 'defer';
                $globalAttrs[] = 'integrity';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'text';
                $globalAttrs[] = 'crossorigin';
                $globalAttrs[] = '';
                break;
            case 'td':
                $globalAttrs[] = 'colspan';
                $globalAttrs[] = 'rowspan';
                $globalAttrs[] = 'headers';
                break;
            case 'th':
                $globalAttrs[] = 'colspan';
                $globalAttrs[] = 'rowspan';
                $globalAttrs[] = 'headers';
                $globalAttrs[] = 'scope';
                break;
            case 'button':
                $globalAttrs[] = 'autofocus';
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'formaction';
                $globalAttrs[] = 'formmethod';
                $globalAttrs[] = 'formenctype';
                $globalAttrs[] = 'formnovalidate';
                $globalAttrs[] = 'formtarget';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'value';
                break;
            case 'fieldset':
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'name';
                break;
            case 'form':
                $globalAttrs[] = 'accept-charset';
                $globalAttrs[] = 'action';
                $globalAttrs[] = 'autocomplete';
                $globalAttrs[] = 'enctype';
                $globalAttrs[] = 'method';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'novalidate';
                $globalAttrs[] = 'target';
                break;
            case 'input':
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'accept';
                $globalAttrs[] = 'autocomplete';
                $globalAttrs[] = 'autofocus';
                $globalAttrs[] = 'capture';
                $globalAttrs[] = 'checked';
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'formmethod';
                $globalAttrs[] = 'formaction';
                $globalAttrs[] = 'formenctype';
                $globalAttrs[] = 'formnovalidate';
                $globalAttrs[] = 'formtarget';
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'inputmode';
                $globalAttrs[] = 'list';
                $globalAttrs[] = 'min';
                $globalAttrs[] = 'max';
                $globalAttrs[] = 'maxlength';
                $globalAttrs[] = 'minlength';
                $globalAttrs[] = 'multiple';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'pattern';
                $globalAttrs[] = 'placeholder';
                $globalAttrs[] = 'readonly';
                $globalAttrs[] = 'required';
                $globalAttrs[] = 'selectionDirection';
                $globalAttrs[] = 'selectionEnd';
                $globalAttrs[] = 'selectionStart';
                $globalAttrs[] = 'size';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'step';
                $globalAttrs[] = 'value';
                $globalAttrs[] = 'width';
                break;
            case 'label':
                $globalAttrs[] = 'for';
                break;
            case 'meter':
                $globalAttrs[] = 'value';
                $globalAttrs[] = 'min';
                $globalAttrs[] = 'max';
                $globalAttrs[] = 'low';
                $globalAttrs[] = 'high';
                $globalAttrs[] = 'optimum';
                $globalAttrs[] = 'form';
                break;
            case 'optgroup':
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'label';
                break;
            case 'option':
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'label';
                $globalAttrs[] = 'selected';
                $globalAttrs[] = 'value';
                break;
            case 'output':
                $globalAttrs[] = 'for';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'name';
                break;
            case 'progress':
                $globalAttrs[] = 'value';
                $globalAttrs[] = 'max';
                break;
            case 'select':
                $globalAttrs[] = 'autofocus';
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'multiple';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'required';
                $globalAttrs[] = 'size';
                break;
            case 'textarea':
                $globalAttrs[] = 'autocomplete';
                $globalAttrs[] = 'autofocus';
                $globalAttrs[] = 'cols';
                $globalAttrs[] = 'disabled';
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'maxlength';
                $globalAttrs[] = 'minlength';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'placeholder';
                $globalAttrs[] = 'readonly';
                $globalAttrs[] = 'required';
                $globalAttrs[] = 'rows';
                $globalAttrs[] = 'selectionDirection';
                $globalAttrs[] = 'selectionEnd';
                $globalAttrs[] = 'selectionStart';
                $globalAttrs[] = 'wrap';
                break;
            case 'area':
                $globalAttrs[] = 'alt';
                $globalAttrs[] = 'coords';
                $globalAttrs[] = 'download';
                $globalAttrs[] = 'href';
                $globalAttrs[] = 'hreflang';
                $globalAttrs[] = 'media';
                $globalAttrs[] = 'referrerpolicy';
                $globalAttrs[] = 'ref';
                $globalAttrs[] = 'shape';
                $globalAttrs[] = 'target';
                break;
            case 'audio':
                $globalAttrs[] = 'autoplay';
                $globalAttrs[] = 'buffered';
                $globalAttrs[] = 'controls';
                $globalAttrs[] = 'loop';
                $globalAttrs[] = 'muted';
                $globalAttrs[] = 'played';
                $globalAttrs[] = 'preload';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'volume';
                break;
            case 'embed':
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'width';
                break;
            case 'img':
                $globalAttrs[] = 'alt';
                $globalAttrs[] = 'crossorigin';
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'longdesc';
                $globalAttrs[] = 'referrerpolicy';
                $globalAttrs[] = 'sizes';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'width';
                $globalAttrs[] = 'usemap';
                break;
            case 'map':
            case 'param':
                $globalAttrs[] = 'name';
                break;
            case 'object':
                $globalAttrs[] = 'form';
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'name';
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'typemustmatch';
                $globalAttrs[] = 'usemap';
                $globalAttrs[] = 'width';
                break;
            case 'source':
                $globalAttrs[] = 'sizes';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'srcset';
                $globalAttrs[] = 'type';
                $globalAttrs[] = 'media';
                break;
            case 'track':
                $globalAttrs[] = 'default';
                $globalAttrs[] = 'kind';
                $globalAttrs[] = 'label';
                $globalAttrs[] = 'src';
                $globalAttrs[] = 'srclang';
                break;
            case 'video':
                $globalAttrs[] = 'autoplay';
                $globalAttrs[] = 'buffered';
                $globalAttrs[] = 'controls';
                $globalAttrs[] = 'crossorigin';
                $globalAttrs[] = 'height';
                $globalAttrs[] = 'loop';
                $globalAttrs[] = 'muted';
                $globalAttrs[] = 'played';
                $globalAttrs[] = 'preload';
                $globalAttrs[] = 'poster';
                $globalAttrs[] = 'width';
                break;
            default:
                throw new \InvalidArgumentException("Invalid element was found.");
        }

        $clearDataAttrs = function ($attr) use (&$globalAttrs) {
            return in_array($attr, $globalAttrs) || strpos($attr, 'data-') === 0 || strpos($attr, 'aria-') === 0;
        };

        $attrs = array_filter($attrs, $clearDataAttrs, ARRAY_FILTER_USE_KEY);
        return;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return self::$document->saveHTML();
    }
}
