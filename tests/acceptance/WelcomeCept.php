<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/');
$I->see('{"welcome":"Congratulations! You have installed the zend-expressive skeleton application.","docsUrl":"https://docs.zendframework.com/zend-expressive/","foo":{"id":1,"name":"Testing"}}');
