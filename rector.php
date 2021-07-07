<?php declare(strict_types=1);

namespace Tools;

use Rector\Core\Configuration\Option;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [__DIR__ . '/src', __DIR__ . '/tests']);
    $parameters->set(Option::PHP_VERSION_FEATURES, PhpVersion::PHP_73);
    $parameters->set(Option::PHPSTAN_FOR_RECTOR_PATH, __DIR__ . '/phpstan.neon.dist');

    $containerConfigurator->import(SetList::DEAD_CODE);
    $containerConfigurator->import(SetList::CODE_QUALITY_STRICT);
};
