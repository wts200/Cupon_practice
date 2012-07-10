<?php

use vendor\CS\FixerInterface;

$finder = vendor\CS\Finder\DefaultFinder::create()
    ->notName('LICENSE')
    ->notName('README.md')
    ->notName('.php_cs')
    ->notName('app/phpunit.xml*')
    ->notName('*.phar')
    ->exclude('vendor')
    ->exclude('app/cache')
    ->exclude('app/bootstrap.php.cache')
    ->notName('ElseifFixer.php')
    ->in(__DIR__)
;

return vendor\CS\Config\Config::create()
    ->finder($finder)
;
