<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 10-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Composer\Installers;

class BonefishInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'package'    => 'Packages/{$vendor}/{$name}/'
    );
}