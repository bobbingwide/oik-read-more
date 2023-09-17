<?php

/**
 * @package oik-read-more
 * @copyright (C) Bobbing Wide 2023
 *
 * Test the text field rendering in acf_field_block_renderer
 */
class Tests_read_more extends BW_UnitTestCase {

	function setUp(): void {
		parent::setUp();
	}

	/*
	function tearDown(): void {
		$this->dont_restore_hooks();
		parent::tearDown();
	}
	*/


	/**
	 * Loads all the files to see if there are any Deprecation messages
	 *
	 * @return void
	 */
	function test_read_more_files_PHP82() {
		oik_require( 'admin/oik-activation.php', 'oik-read-more');
		oik_require( 'shortcodes/oik-read-more.php', 'oik-read-more' );
		$this->assertTrue( true );
	}

	/**
	 * Tests the shortcode function implementing bw_more.
	 * @return void
	 */
	function test_bw_more_shortcode() {
		//$content = 'Before more[bw_more]after more';
		$html = oik_rm();
		//$this->generate_expected_file( $html );
		$this->assertArrayEqualsFile( $html );
	}

	function test_oik_rm_end() {
		$html = oik_rm_end( '' );
		//$this->generate_expected_file( $html );
		$this->assertArrayEqualsFile( $html );

	}

}

