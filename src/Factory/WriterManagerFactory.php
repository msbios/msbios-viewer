<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;

use MSBios\Resolver\ResolverManagerInterface;
use MSBios\Viewer\Module;
use MSBios\Viewer\ReaderManager;
use MSBios\Viewer\WriterManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class WriterManagerFactory
 * @package MSBios\Viewer\Factory
 */
class WriterManagerFactory implements FactoryInterface
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
        $resolverManager = new WriterManager;

        /** @var array $config */
        $config = $container->get(Module::class);

        /**
         * @var string $resolverName
         * @var int $priority
         */
        foreach ($config['write_resolvers'] as $resolverName => $priority ) {
            $resolverManager->attach(
                $container->get($resolverName), $priority
            );
        }

        return $resolverManager;
    }
}