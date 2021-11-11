<?php
namespace ConstructiveCore;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\File;

$finder = new Finder();

class ComponentCreation {

    public function writeToComponentFiles() 
    {
        $files = Finder::create()
        ->in(app_path())
        ->name('*.php')
        ->contains('{replacement-text}');

        foreach ($files as $file) {
            $contents = File::get($file->getRealPath());
            $appended = str_replace('{replacement-text}', ComponentCommand::getComponentName(), $contents);
            File::put($file->getRealPath(), $appended);
        }
    }
}