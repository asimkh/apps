<?php 
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('sign up for Hazzir');

$I->amOnPage('/');
$I->click('Sign Up!');


$I->seeCurrentUrlEquals('/register');
$I->fillField('Username:', 'demo');
$I->fillField('Email:', 'demo@hazzir.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');
$I->click('Sign Up');


$I->seeCurrentUrlEquals('');
//$I->see('Welcome to Hazzir');

$I->seeRecord(

	'users', 
		[
			'username' => 'demo',
			'email' => 'demo@hazzir.com'
		]
	);
