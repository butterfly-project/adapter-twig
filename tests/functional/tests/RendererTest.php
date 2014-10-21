<?php

namespace Butterfly\Tests;

class RendererTest extends BaseDiTest
{
    protected static function getAdditionalConfigPaths()
    {
        return array(
            self::$baseDir . '/config/twiglocal.yml',
        );
    }

    public function testRender()
    {
        /** @var \Twig_Environment $render */
        $render = self::$container->get('bfy_adapter.twig');

        $result = $render->render('template.html.twig', array(
            'parameter' => 'abc',
        ));

        $expected = <<<EXPECTED
<html>
abc
</html>
EXPECTED;

        $this->assertEquals($expected, $result);
    }
}
