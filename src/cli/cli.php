<?php

if ( ! class_exists( 'ConstructiveCoreCommand' ) ) {
	require_once __DIR__ . '/commands/ConstructiveCoreCommand.php';
}
WP_CLI::add_command( 'constructive-core', 'ConstructiveCoreCommand' );

if ( ! class_exists( 'CreateComponentCommand' ) ) {
	require_once __DIR__ . '/commands/CreateComponentCommand.php';
}
WP_CLI::add_command( 'constructive-core create-component', 'CreateComponentCommand' );

if ( ! class_exists( 'CreateServiceProviderCommand' ) ) {
	require_once __DIR__ . '/commands/CreateServiceProviderCommand.php';
}
WP_CLI::add_command( 'constructive-core create-service-provider', 'CreateServiceProviderCommand' );