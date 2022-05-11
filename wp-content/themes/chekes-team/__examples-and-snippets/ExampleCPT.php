<?php
declare( strict_types=1 );

namespace FWS\CPT;

use FWS\SingletonHook;

/**
 * Singleton Class ExampleCPT
 *
 * @package FWS
 */
class ExampleCPT extends SingletonHook {

	/** @var self */
	protected static $instance;

	/**
	 * Set CPT config here.
	 */
	private $postConfig = [
		'singularName' => 'Custom Post',
		'pluralName'   => 'Custom Posts',
		'dashIcon' => 'dashicons-admin-post'
	];

	/**
	 * Set CPTax config here.
	 */
	private $taxConfig = [
		[
			'singularName'  => 'Custom Post Category',
			'pluralName'    => 'Custom Post Categories',
		],
		[
			'singularName'  => 'Custom Post Attribute',
			'pluralName'    => 'Custom Post Attributes',
		]
	];

	/**
	 * Registers a custom post type.
	 */
	public function cptInit(): void
	{
		// get names from config
		$singular = $this->postConfig['singularName'];
		$plural   = $this->postConfig['pluralName'];
		$dashIcon = $this->postConfig['dashIcon'];

		// set slugs
		$postSlug = $this->createSlug( $singular );
		$postNiceSlug = $this->createSlug( $singular, false, true );

		// set labels and args
		$labels = $this->createPostLabels($singular, $plural);
		$args = $args = $this->createPostArgs($labels, $postNiceSlug, $dashIcon);

		// register custom post type
		register_post_type( $postSlug, $args );
	}

	/**
	 * Registers a custom taxonomy.
	 */
	public function cptInitTax(): void
	{
		// check if there are any taxonomies in config
		if ($this->taxConfig) {
			foreach ($this->taxConfig as $tax) {
				// get names from config
				$singular = $tax['singularName'];
				$plural   = $tax['pluralName'];

				// set slugs
				$taxSlug  = $this->createSlug( $singular, true );
				$taxNiceSlug = $this->createSlug( $singular, true, true );
				$postSlug = $this->createSlug( $this->postConfig['singularName'] );

				// set labels and args
				$labels = $this->createTaxLabels($singular, $plural);
				$args = $this->createTaxArgs($labels, $taxNiceSlug);

				// register custom taxonomy
				register_taxonomy( $taxSlug, $postSlug, $args );
			}
		}
	}

	/**
	 * Create post arguments
	 *
	 * @param array  $labels
	 * @param string $postNiceSlug
	 * @param string $dashIcon
	 *
	 * @return array
	 */
	private function createPostArgs( array $labels, string $postNiceSlug, string $dashIcon): array
	{
		return [
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => true,
			'show_in_menu'      => true,
			'show_in_nav_menus' => true,
			'has_archive'       => true,
			'show_in_rest'      => true,
			'rewrite'           => ['slug' => $postNiceSlug],
			'menu_icon'         => $dashIcon,
			'supports'          => ['title', 'thumbnail', 'editor']
		];
	}

	/**
	 * Create post arguments
	 *
	 * @param array  $labels
	 * @param string $taxNiceSlug
	 *
	 * @return array
	 */
	private function createTaxArgs( array $labels, string $taxNiceSlug): array
	{
		return [
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => ['slug' => $taxNiceSlug],
		];
	}

	/**
	 * Create post labels
	 *
	 * @param string  $singular
	 * @param string $plural
	 *
	 * @return array
	 */
	private function createPostLabels( string $singular, string $plural): array
	{
		return [
			'name'               => _x( $plural, 'cpt_plural_name', 'chekes-team' ),
			'singular_name'      => _x( $singular, 'cpt_singular_name', 'chekes-team' ),
			'all_items'          => __( 'All ' . $plural, 'chekes-team' ),
			'add_new'            => __( 'Add New', 'chekes-team' ),
			'add_new_item'       => __( 'Add New ' . $singular, 'chekes-team' ),
			'edit'               => __( 'Edit', 'chekes-team' ),
			'edit_item'          => __( 'Edit ' . $singular, 'chekes-team' ),
			'new_item'           => __( 'New ' . $singular, 'chekes-team' ),
			'view'               => __( 'View ' . $singular, 'chekes-team' ),
			'view_item'          => __( 'View ' . $singular, 'chekes-team' ),
			'search_term'        => __( 'Search ' . $plural, 'chekes-team' ),
			'parent'             => __( 'Parent ' . $singular, 'chekes-team' ),
			'not_found'          => __( 'No ' . $plural . ' found', 'chekes-team' ),
			'not_found_in_trash' => __( 'No ' . $plural . ' in Trash', 'chekes-team' ),
		];
	}

	/**
	 * Create taxonomy labels
	 *
	 * @param string  $singular
	 * @param string $plural
	 *
	 * @return array
	 */
	private function createTaxLabels( string $singular, string $plural): array
	{
		return [
			'name'              => _x( $plural, 'ctax_plural_name', 'chekes-team' ),
			'singular_name'     => _x( $singular, 'ctax_singular_name', 'chekes-team' ),
			'search_items'      => __( 'Search ' . $plural, 'chekes-team' ),
			'all_items'         => __( 'All ' . $plural, 'chekes-team' ),
			'parent_item'       => __( 'Parent ' . $singular, 'chekes-team' ),
			'parent_item_colon' => __( 'Parent:' . $singular, 'chekes-team' ),
			'edit_item'         => __( 'Edit ' . $singular, 'chekes-team' ),
			'update_item'       => __( 'Update ' . $singular, 'chekes-team' ),
			'add_new_item'      => __( 'Add New ' . $singular, 'chekes-team' ),
			'new_item_name'     => __( 'New ' . $singular, 'chekes-team' ),
			'menu_name'         => __( $plural, 'chekes-team' ),
		];
	}

	/**
	 * Create a slug
	 *
	 * @param string $name
	 * @param boolean $isTax
	 * @param boolean $niceName
	 *
	 * @return string
	 */
	private function createSlug( string $name, bool $isTax = false, bool $niceName = false): string
	{
		$replaceWidth = $niceName ? '-' : '_';
		$prefix = $isTax ? 'ctax_' : 'cpt_';
		$prefix = $niceName ? '' : $prefix;
		$slug = str_replace( ' ', $replaceWidth, strtolower( $name ) );

		return $prefix . $slug;
	}

	/**
	 * Drop your hooks here.
	 */
	protected function hooks() {
		// Actions
		add_action( 'init', [ $this, 'cptInit' ] );
		add_action( 'init', [ $this, 'cptInitTax' ] );
	}
}
