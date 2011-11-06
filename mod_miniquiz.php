<?php
/**
 * miniquiz Module Entry Point
 * 
 * @package    
 * @subpackage 
 * @link http://github.com/freeakk
 * @license        
 * 
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$q = modminiquizHelper::getRandomQuestion( );
$hide = (!isset($_COOKIE['miniquiz_flag']) 
	&& !(isset($_GET['option']) && $_GET['option'] == 'com_miniquiz'));


require( JModuleHelper::getLayoutPath( 'mod_miniquiz' ) );
?>
