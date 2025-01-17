<?php

namespace PressWind\Inc\Core\Helpers;

/**
 * get manifest file generated by vite
 */
function get_manifest($rootPath = 'dist/manifest.json')
{
  $strJsonFileContents = file_get_contents(dirname(__FILE__) . '/../../../' . $rootPath);

  return json_decode(str_replace(
    '\u0000',
    '',
    $strJsonFileContents
  ));
}
