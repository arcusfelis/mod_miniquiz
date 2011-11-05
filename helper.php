<?php
/**
 * Helper class for miniquiz module
 * 
 * @package    
 * @subpackage 
 * @link http://github.com/freeakk
 * @license        
 * 
 */
 
// no direct access
defined('_JEXEC') or die('Restricted access');

class modminiquizHelper
{
	static function getRandomQuestion()
	{
		jimport('joomla.application.component.model');
		JModel::addIncludePath(JPATH_ROOT.'/components/com_miniquiz/models', 'MiniquizModel');

		$model = JModel::getInstance('Questions', 'MiniquizModel');
		$items = $model->getItems();

		if (!(is_array($items) && count($items)))
			return false;
			

		$index = time() % count($items);

		return $items[$index];
	}
}
?>
