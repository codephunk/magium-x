<?php

namespace Tests\Magium\Magento18\Checkout;

class CartSummaryTest extends \Tests\Magium\Magento\Checkout\CartSummaryTest
{
    protected function setUp()
    {
        parent::setUp();
        $this->switchThemeConfiguration('Magium\Magento\Themes\Magento18\ThemeConfiguration');
    }

}