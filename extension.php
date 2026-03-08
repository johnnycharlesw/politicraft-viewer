<?php
# create Hello, World special page

use PHPizza\PHPizzaExtensionAPI;
use PHPizza\SpecialPage;

$api = new PHPizzaExtensionAPI();

class SpecialPageHelloWorld extends SpecialPage
{
    public function __construct($name) {
        parent::__construct($name, "Hello, World!", <<<PIZZADOWN
        # Hello, World!
        This page was just loaded via the sample extension
        PIZZADOWN);
    }
}

$api->registerSpecialPage("HelloWorld", SpecialPageHelloWorld::class);