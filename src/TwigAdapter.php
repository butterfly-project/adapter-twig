<?php

namespace Butterfly\Adapter\Twig;

use Butterfly\Interfaces\TemplateRender\IRender;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
class TwigAdapter implements IRender
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param string $view
     * @param array $parameters
     * @return string
     */
    public function render($view, array $parameters = array())
    {
        return $this->twig->render($view, $parameters);
    }
}
