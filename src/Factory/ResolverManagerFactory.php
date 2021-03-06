<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Viewer\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Resolver\ResolverManagerInterface;
use MSBios\Viewer\Module;
use MSBios\Viewer\ResolverManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ResolverManagerFactory
 * @package MSBios\Viewer\Factory
 */
class ResolverManagerFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return ResolverManagerInterface|ResolverManager
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ResolverManagerInterface $resolverManager */
        $resolverManager = new ResolverManager;

        /** @var array $config */
        $config = $container->get(Module::class);

        /**
         * @var string $resolverName
         * @var int $priority
         */
        foreach ($config['viewer_resolvers'] as $resolverName => $priority) {
            if ($container->has($requestedName)) {
                $resolverManager->attach(
                    $container->get($resolverName),
                    $priority
                );
            }
        }

        return $resolverManager;
    }
}
