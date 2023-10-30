<?php
/**
 * Conlabz GmbH
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com and you will be sent a copy immediately.
 *
 * @category   CleverReach
 * @package    Conlabz_CrConnect
 * @author     David Pommer <david.pommer@conlabz.de>
 * @copyright  Copyright (c) 2018 Conlabz GmbH (http://conlabz.de)
 */

class Conlabz_CrConnect_Block_Newsletter_Subscribe extends Mage_Newsletter_Block_Subscribe
{
    protected function _toHtml(): string
    {
       return str_replace('</form>', $this->getBlockHtml('formkey').'</form>', parent::_toHtml());
    }
}