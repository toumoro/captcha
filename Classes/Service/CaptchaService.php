<?php
namespace ThinkopenAt\Captcha\Service;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CaptchaService extends \TYPO3\CMS\Sv\AbstractAuthenticationService {
    public function processLoginData($loginData) {
        $response = GeneralUtility::_GP('captchaResponse');
        if (\ThinkopenAt\Captcha\Utility::checkCaptcha($response)) {
            return true;
        } else {
            return 200;
        }
    }
}
