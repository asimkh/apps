<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('send Shout form!');

$I->amOnPage('/');
$I->click('Shout');
$I->click('Submit');

