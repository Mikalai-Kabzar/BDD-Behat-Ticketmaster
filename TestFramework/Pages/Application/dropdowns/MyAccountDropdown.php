<?php

namespace TestFramework\Pages\Application\Dropdowns;

/**
 * Defines My account dropdown.
 */
class MyAccountDropdown extends Dropdown {

    const ACCOUNT_BUTTON_XPATH = ".//div[@id='account-options']";
    const SIGN_IN_BUTTON_XPATH = ".//a[@class='button' and text()='Sign In']";
    const YOUR_ACCOUNT_LABEL = "Your Account";
    const EDIT_PROFILE_LABEL = "Edit Profile";
    const EDIT_EMAIL_PREFERENCES_LABEL = "Edit Email Preferences";
    const EDIT_BILLING_INFORMATION_LABEL = "Edit Billing Information";
    const ORDER_HISTORY_LABEL = "Order History";
    const PRINT_MY_TICKETS_LABEL = "Print My Tickets";

    protected static $keyWord = "account";
    
    
    /**
     * Click on $option option.
     *
     * @param $option - option to click.
     */
    public function clickOnOption($option) {
        $xpath = $this->getOptionXpath($option);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Sign In' button.
     */
    public function clickSignIn() {
        $xpath = MyAccountDropdown::SIGN_IN_BUTTON_XPATH;
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Your Account' label.
     */
    public function clickOnYourAccount() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::YOUR_ACCOUNT_LABEL);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Edit Profile' label.
     */
    public function clickOnEditProfileLabel() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::EDIT_PROFILE_LABEL);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Edit Email Preferences' label.
     */
    public function clickOnEditEmailPreferencesLabel() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::EDIT_EMAIL_PREFERENCES_LABEL);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Edit Billing Information' label.
     */
    public function clickOnEditBillingInformationLabel() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::EDIT_BILLING_INFORMATION_LABEL);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Order History' label.
     */
    public function clickOnOrderHistoryLabel() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::ORDER_HISTORY_LABEL);
        $this->clickOnMenuElement($xpath);
    }

    /**
     * Click on 'Print My Tickets' label.
     */
    public function clickOnPrintMyTicketsLabel() {
        $xpath = $this->getOptionXpath(MyAccountDropdown::PRINT_MY_TICKETS_LABEL);
        $this->clickOnMenuElement($xpath);
    }

}
