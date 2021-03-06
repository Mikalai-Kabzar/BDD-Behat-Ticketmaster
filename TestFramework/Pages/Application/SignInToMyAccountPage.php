<?php

namespace TestFramework\Pages\Application;

use TestFramework\Services\WebElementsService;

/**
 * Defines Sign In To My Account Page.
 */
class SignInToMyAccountPage {

    const EMAIL_FIELD_XPATH = './/*[@id= "email"]';
    const PASSWORD_FIELD_XPATH = './/*[@id= "password"]';
    const ACCEPT_AND_CONTINUE_BUTTON_XPATH = './/input[@name="Submit"]';

    /**
     * Click on 'Accept and Continue'.
     */
    public static function acceptAndContinue() {
        WebElementsService::clickOn(SignInToMyAccountPage::ACCEPT_AND_CONTINUE_BUTTON_XPATH);
    }

    /**
     * Fill 'My e-mail address is' field.
     *
     * @param $email string to fill email field.
     */
    public static function fillEmail($email) {
        WebElementsService::fillField(SignInToMyAccountPage::EMAIL_FIELD_XPATH, $email);
    }

    /**
     * Fill 'Application Password' field.
     *
     * @param $password string to fill password field.
     */
    public static function fillPassword($password) {
        WebElementsService::fillField(SignInToMyAccountPage::PASSWORD_FIELD_XPATH, $password);
    }

}
