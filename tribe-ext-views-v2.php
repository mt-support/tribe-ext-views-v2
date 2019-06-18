<?php
/**
 * Plugin Name:       Tribe Events Extension: Views V2
 * Plugin URI:        https://theeventscalendar.com/extensions/---the-extension-article-url---/
 * GitHub Plugin URI: https://github.com/mt-support/tribe-ext-extension-template
 * Description:       [Extension Description]
 * Version:           1.0.1
 * Extension Class:   Tribe\Extensions\Example\Main
 * Author:            Modern Tribe, Inc.
 * Author URI:        http://m.tri.be/1971
 * License:           GPL version 3 or any later version
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       tribe-ext-extension-template
 *
 *     This plugin is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     any later version.
 *
 *     This plugin is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *     GNU General Public License for more details.
 */

add_filter( 'tribe_display_settings_tab_fields', 'tribe_ext_views_v2_filter_settings_fields', 25 );

function tribe_ext_views_v2_filter_settings_fields( $settings ) {
	return Tribe__Main::array_insert_after_key(
		'tribeEventsBasicSettingsTitle',
		$settings,
		[
			Tribe\Events\Views\V2\Manager::$option_enabled => [
				'type'            => 'checkbox_bool',
				'label'           => __( 'Enable View V2 Design', 'tribe-ext-views-v2' ),
				'tooltip'         => __( 'Check this to use the new Shiny View Design!.', 'tribe-ext-views-v2' ),
				'default'         => false,
				'validation_type' => 'boolean',
			],
		]
	);
}
