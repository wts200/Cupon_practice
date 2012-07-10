<?php

use Symfony\CS\FixerInterface;

$finder = Symfony\CS\Finder\DefaultFinder::create()
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

return Symfony\CS\Config\Config::create()
    ->finder($finder)
;
