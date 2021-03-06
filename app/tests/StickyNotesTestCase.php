<?php

/**
 * Sticky Notes
 *
 * An open source lightweight pastebin application
 *
 * @package     StickyNotes
 * @author      Sayak Banerjee
 * @copyright   (c) 2014 Sayak Banerjee <mail@sayakbanerjee.com>
 * @license     http://www.opensource.org/licenses/bsd-license.php
 * @link        http://sayakbanerjee.com/sticky-notes
 * @since       Version 1.7
 * @filesource
 */

use Illuminate\Foundation\Testing\TestCase;

/**
 * StickyNotesTestCase
 *
 * Defines the root test case scenarios used in all unit test cases
 *
 * @package     StickyNotes
 * @subpackage  UnitTests
 * @author      Sayak Banerjee
 */
class StickyNotesTestCase extends TestCase {

	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = TRUE;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

	/**
	 * Initializes the test step by enabling filters
	 *
	 * @param  bool  $enableFilters
	 * @return void
	 */
	protected function initTestStep($enableFilters = TRUE)
	{
		$this->be(User::first());

		if ($enableFilters)
		{
			Route::enableFilters();
		}
	}

}
