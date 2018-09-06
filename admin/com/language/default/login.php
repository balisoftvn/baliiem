<?php
/**
* Language file variables for the login page.
*
* @see GetLang
*
* @version     $Id: login.php,v 1.11 2008/01/08 04:09:40 scott Exp $
* @author Chris <chris@interspire.com>
*
* @package SendStudio
* @subpackage Language
*/

/**
* Here are all of the variables for the login area... Please backup before you start!
*/


define('LNG_Login', 'Đăng nhập');
define('LNG_UserName', 'Tên đăng nhập');
define('LNG_NoUsername', 'Vui lòng nhập tên đăng nhập.');
define('LNG_NoPassword', 'Vui lòng nhập mật khẩu.');

/**
* Forgot password page.
*/
define('LNG_ForgotPasswordDetails', 'Enter your details below.');
define('LNG_NewPassword', 'New Password');
define('LNG_BadLogin_Forgot', 'That username doesn\'t exist. Please try again.');
define('LNG_ChangePasswordSubject', 'Please confirm your password change');
define('LNG_ChangePasswordEmail', 'You have recently chosen to change your control panel password. To confirm this, please click on the following link: %s');
define('LNG_PasswordUpdated', 'Your password has been updated successfully. Please login below.');
define('LNG_BadLogin_Link', 'The link you received in the email is invalid. Please try again.');
define('LNG_ChangePassword', 'Change Password');

define('LNG_LoginTitle', 'Đăng nhập');


/**
***************************
* Changed/added in v5.0
***************************
*/
define('LNG_SendPassword', 'Gửi Email');
define('LNG_BadLogin', 'The username or password you provided are incorrect. Please check them and try again.');
define('LNG_Help_ForgotPassword', 'Fill in the form to generate a new password. An email will be sent to you containing a link which you must click to confirm your password change.');
define('LNG_Help_Login', 'Đăng nhập với tên người dùng và mật khẩu của bạn sau đây.');
define('LNG_RememberMe', 'Ghi nhớ chi tiết của tôi');
define('LNG_ChangePassword_Emailed', 'Before Your Password is Changed...<br /><br />Please check your inbox/junk mail folder for %s. You\'ve just been sent an email that contains a link you must click to change your password.');
define('LNG_ForgotPasswordReminder', '<a href="index.php?Page=Login&Action=ForgotPass" style="font-size: 11px;">Đã quên mật khẩu?</a>');

define('LNG_TakeMeTo', 'Đưa tôi đến');
define('LNG_TakeMeTo_HomePage', 'Trang chủ');
define('LNG_TakeMeTo_Contacts', 'Liên hệ của tôi');
define('LNG_TakeMeTo_Lists', 'DS liên hệ của tôi');
define('LNG_TakeMeTo_Campaign', 'Chiến dịch Email của tôi');
define('LNG_TakeMeTo_Autoresponder', 'My Autoresponder');
define('LNG_TakeMeTo_Statistics', 'My Campaign Statistics');
define('LNG_TakeMeTo_Segments', 'My Segments');

/**
***************************
* Changed/Added in v5.0.10
***************************
*/
define('LNG_PleaseWaitAWhile', 'Multiple failed login attempts detected. Please wait 15 minutes before attempting to login again.');

/**
***************************
* Changed/Added in v5.7.0
***************************
*/
define('LNG_ApplicationInactive_Admin', 'This software has been disabled due to a possible license violation. If you feel you have received this message in error, please contact Interspire.');
define('LNG_ApplicationInactive_Regular', 'This application is currently down for maintenance and is not available. Please try again later.');
