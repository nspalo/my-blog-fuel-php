<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

// Bootstrap the framework - THIS LINE NEEDS TO BE FIRST!
require COREPATH.'bootstrap.php';

// Add framework overload classes here
\Autoloader::add_classes(array(
	// Example: 'View' => APPPATH.'classes/myview.php',

    // Namespace
    'Fuel\\Enums\\StatusEnum' => APPPATH . 'classes/enum/StatusEnum.php',
    'Fuel\\Tasks\\Status' => APPPATH . 'tasks/Status.php',
));

// Register the autoloader
\Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
Fuel::$env = Arr::get($_SERVER, 'FUEL_ENV', Arr::get($_ENV, 'FUEL_ENV', getenv('FUEL_ENV') ?: Fuel::DEVELOPMENT));

// Initialize the framework with the config file.
\Fuel::init('config.php');

// Add for PhpUnit 5+, old autoloading doesn't work
class PHPUnit_Framework_TestCase extends \PHPUnit\Framework\TestCase
{
}
