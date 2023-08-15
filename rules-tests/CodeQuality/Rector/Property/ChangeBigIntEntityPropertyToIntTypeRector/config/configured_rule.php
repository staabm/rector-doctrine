<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\Doctrine\CodeQuality\Rector\Property\ChangeBigIntEntityPropertyToIntTypeRector;


return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ChangeBigIntEntityPropertyToIntTypeRector::class);
};
