<?php
/**
 * RH Costa Mesa theme
 * 
 * @package rockharbor
 * @subpackage costamesa
 */
class ChildTheme extends RockharborThemeBase {
		
/**
 * List of options for this theme
 * 
 * @var array
 */
	protected $themeOptions = array(
		'slug' => 'costamesa',
		'short_name' => 'Costa Mesa',
		'supports' => array(
			'message',
			'staff',
			'curriculum'
		)
	);
}