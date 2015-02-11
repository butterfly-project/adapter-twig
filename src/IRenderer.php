<?php

namespace Butterfly\Adapter\Twig;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
interface IRenderer
{
    /**
     * @param string $view
     * @param array $parameters
     * @return string
     */
    public function render($view, array $parameters = array());
}
