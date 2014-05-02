<?php
/**
* Community modification module
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Free-QueryLog
* @version $Id: edmodule_querylog.php 39565 2014-03-14 16:12:04Z weinert $
*/

/**
* Query log analysis module
*
* @package Papaya-Modules
* @subpackage Free-QueryLog
*/
class edmodule_querylog extends base_module {

  /**
  * Glyph
  * @var string $glyph
  */
  var $glyph = 'categories/log_access.php';

  /**
  * Permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Analyze'
  );

  /**
  * Execute module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $surf = new admin_querylog();
      $surf->module = $this;
      $surf->layout = $this->layout;
      $surf->execute();
      $surf->get($this->layout);
      $surf->getButtons();
    }
  }
}

