#!/usr/bin/env php

<?php

require __DIR__.'/nicejson.php';

$baseDir = __DIR__.'/../src';
$files = scanDirAll($baseDir);
foreach($files as $index=>$f)
{
    $files[$index] = str_replace(dirname($baseDir).DIRECTORY_SEPARATOR, '', $f);
}

$composerJsonFile = __DIR__.'/../composer.json';
$composerJson = json_decode( file_get_contents($composerJsonFile), true );
$composerJson['autoload']['files'] = $files;
file_put_contents($composerJsonFile, jsonFormat($composerJson));

function scanDirAll($dir)
{
    $allFiles = [];
    $filesArr = scandir($dir);
    foreach($filesArr as $f)
    {
        if ($f == '.' || $f == '..' || $f == '.DS_Store') continue;

        $filename = $dir.DIRECTORY_SEPARATOR.$f;
        if (is_dir($filename))
        {
            $allFiles = array_merge($allFiles, scanDirAll($filename));
        }
        else {
            $allFiles[] = $filename;
        }
    }

    return $allFiles;
}