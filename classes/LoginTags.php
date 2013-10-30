<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   LoginTags
 * @author    Sergey Dyagovchenko aka DyaGa
 * @license   GNU/LGPL
 * @copyright Sergey Dyagovchenko 2013
 */

/**
 * Class LoginTags
 *
 * Wrapper class for login tags
 *
 * @copyright  Sergey Dyagovchenko 2013
 * @author     Sergey Dyagovchenko <http://d.sumy.ua/>
 * @package    LoginTags
 */
class LoginTags extends \Controller
{

	/**
	 * Replace login tags
	 *
	 * @param string $strTag
	 * @param boolean $blnCache
	 *
	 * @return boolean|string
	 */
	public function replaceLoginTags($strTag, $blnCache)
	{
		$arrCondTags = array
		(
			'if',
			'ifn',
			'endif',
			'endifn'
		);

		list($strCondTag, $strValue) = explode('::', $strTag);

		if (!in_array($strCondTag, $arrCondTags)) return;

		switch ($strValue)
		{
			case 'member':
				$blnResult = FE_USER_LOGGED_IN;
				break;

			case 'user':
				$blnResult = BE_USER_LOGGED_IN;
				break;

			case 'guest':
				$blnResult = !FE_USER_LOGGED_IN && !BE_USER_LOGGED_IN;
				break;

			default:
				return false;
		}

		if ($strCondTag === 'ifn' || $strCondTag === 'endifn')
		{
			$blnResult = !$blnResult;
		}

		switch ($strCondTag)
		{
			case 'ifn':
			case 'if':
				$strReplace = '<!--';
				break;

			case 'endifn':
			case 'endif':
				$strReplace = '-->';
				break;
		}

		return $blnResult ? '' : $strReplace;
	}
}