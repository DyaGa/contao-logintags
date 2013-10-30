<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   Logintags
 * @author    Sergey Dyagovchenko aka DyaGa
 * @license   GNU/LGPL
 * @copyright Sergey Dyagovchenko 2013
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LoginTags', 'replaceLoginTags');