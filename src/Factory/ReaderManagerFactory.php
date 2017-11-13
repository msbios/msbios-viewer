<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;


use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use MSBios\Resolver\ResolverManagerInterface;
use MSBios\Viewer\Module;
use MSBios\Viewer\ReaderManager;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ReaderManagerFactory
 * @package MSBios\Viewer\Factory
 */
class ReaderManagerFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ResolverManagerInterface|ReaderManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ResolverManagerInterface $resolverManager */
        $resolverManager = new ReaderManager;

        /** @var array $config */
        $config = $container->get(Module::class);

        /**
         * @var string $resolverName
         * @var int $priority
         */
        foreach ($config['reader_resolvers'] as $resolverName => $priority ) {
            $resolverManager->attach(
                $container->get($resolverName), $priority
            );
        }

        return $resolverManager;
    }
}