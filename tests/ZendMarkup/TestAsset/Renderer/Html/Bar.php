<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Markup
 */

namespace ZendMarkupTest\TestAsset\Renderer\Html;

use ZendMarkup\Renderer\AbstractRenderer;

/**
 * Tag interface
 *
 * @category   Zend
 * @package    Zend_Markup
 * @subpackage Renderer_Html
 */
class Bar implements \ZendMarkup\Renderer\Markup\MarkupInterface
{
    public function setEncoding($encoding = 'UTF-8')
    {
    }

    public function setRenderer(AbstractRenderer $renderer)
    {
    }

    /**
     * Convert the token
     *
     * @param Zend_Markup_Token $token
     * @param string $text
     *
     * @return string
     */
    public function __invoke(\ZendMarkup\Token $token, $text)
    {
        $bar = $token->getAttribute('bar');

        if (!empty($bar)) {
            $bar = '=' . $bar;
        }

        return "[foo{$bar}]" . $text . '[/foo]';
    }

    /**
     * Returns the result of filtering $value
     *
     * @param  mixed $value
     * @throws Zend\Filter\Exception\RuntimeException If filtering $value is impossible
     * @return mixed
     */
    public function filter($value)
    {
        // TODO: Implement filter() method.
    }
}
