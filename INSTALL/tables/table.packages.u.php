<?php
/**
 * table.packages.u.php
 *
 * `[PREFIX]_packages` database table script
 *
 * @version 1.7
 * @link http://www.nuked-klan.org Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */

$dbTable->setTable($this->_session['db_prefix'] .'_packages');

///////////////////////////////////////////////////////////////////////////////////////////////////////////
// Table removal
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// install 1.7.9 RC3 (created)
// install 1.7.9 RC6 (removed)
if ($process == 'update' && $dbTable->tableExist())
    $dbTable->dropTable();

?>