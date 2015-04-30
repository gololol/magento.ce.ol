<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gol
 * Date: 25.02.15
 * Time: 22:36
 * To change this template use File | Settings | File Templates.
 */

/**
 * @var $this Mage_Sales_Model_Resource_Setup
 */

$this->startSetup();

$this->addAttribute('order', 'is_exported', array('type' => 'int', 'grid' => true));

$this->endSetup();