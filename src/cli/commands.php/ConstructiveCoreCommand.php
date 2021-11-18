<?php 
namespace ConstructiveCore;

use Symfony\Component\Finder\Finder;

/**
 * Constructive Core commands for WP-CLI
 *
 * @package wp-cli
 * 
 * 
 */

class ConstructiveCoreCommand extends WP_CLI_Command {
    
    public function create_component() {
       $new_component = CreateComponentCommand::create_component();
    }

    public function create_service_provider() {
        $new_service_provider = CreateServiceProviderCommand::create_service_provider();

    }
}

