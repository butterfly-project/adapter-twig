<?php

namespace Butterfly\Tests;

class ServicesTest extends BaseDiTest
{
    public function getDataForTestParameter()
    {
        return array(
            array('bfy_adapter.twig.template_paths', array()),
            array('bfy_adapter.twig.configuration', array()),
        );
    }

    /**
     * @dataProvider getDataForTestParameter
     * @param string $parameterName
     * @param mixed $expectedValue
     */
    public function testParameter($parameterName, $expectedValue)
    {
        $this->assertEquals($expectedValue, self::$container->getParameter($parameterName));
    }

    public function getDataForTestService()
    {
        return array(
            array('bfy_adapter.twig.loader'),
            array('bfy_adapter.twig.environment'),
            array('bfy_adapter.twig'),
        );
    }

    /**
     * @dataProvider getDataForTestService
     * @param string $serviceName
     */
    public function testService($serviceName)
    {
        self::$container->getService($serviceName);
    }

    public function getDataForTestInterface()
    {
        return array(
            array('Butterfly\Adapter\Twig\IRenderer'),
        );
    }

    /**
     * @dataProvider getDataForTestInterface
     * @param string $interfaceName
     */
    public function testInterface($interfaceName)
    {
        self::$container->getInterface($interfaceName);
    }
}
