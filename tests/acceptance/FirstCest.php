<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Tester ma page');
        $I->amOnPage('/Ryan');
        $I->see('Ryan Monnier');
    }
}
