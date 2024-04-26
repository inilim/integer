<?php

namespace Inilim\Integer;

abstract class LazyMethodAbstract
{
    /**
     * @var object[]|array{}
     */
    protected static $instance = [];

    /**
     * @param string $name
     * @param mixed[]|array{} $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return self::__callStatic($name, $arguments);
    }

    /**
     * @param string $name
     * @param mixed[]|array{} $arguments
     * @return mixed|void
     */
    public static function __callStatic($name, $arguments)
    {
        $class = __NAMESPACE__ . '\Method\\' . \ucfirst($name);

        if (!\class_exists($class) && !method_exists($class, '__invoke')) {
            throw new \RuntimeException('Call to undefined method "' . $name . '"');
        } elseif (isset(self::$instance[$class])) {
            return self::getInstance($class)->__invoke(...$arguments);
        }

        return self::getInstance($class)->__invoke(...$arguments);
    }

    /**
     * @param class-string $class
     */
    protected static function getInstance($class): object
    {
        return self::$instance[$class] ??= new $class;
    }
}
