<?php
/**
 * Slovak Localized Validation class test case
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       localized
 * @since         localized 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::import('Lib', 'Localized.SkValidation');

class SkValidationTestCase extends CakeTestCase {
/**
 * test the postal method of SkValidation
 *
 * @return void
 */
	function testPostal() {
		$this->assertTrue(SkValidation::postal('95616'));
		$this->assertFalse(SkValidation::postal('0989'));
	}
}