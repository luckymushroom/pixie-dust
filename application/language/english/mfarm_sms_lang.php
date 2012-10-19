<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 mfarm ltd <info@mfarm.co.ke>
 *
 *
 * @package     info@mfarm.co.ke
 * @subpackage  SMS Language File
 * @author      mogetutu <imogetutu@gmail.com>
 * @copyright   2012 mfarm ltd.
 * @link        http://www.mfarm.co.ke
 * @version     @@PACKAGE_VERSION@@
 */

// SMS Error Messages
$lang['error_message_price'] = "To get prices:\n\nprice crop location\nTo 3555\nExample: price dry maize nairobi.\n\nCall 0707 933 993 for help. Powered by Samsung Powered by Samsung";
$lang['error_message_sell']  = 'To market with us send:sell crop weight price to 3555. Example:sell beans 2000kgs KES5500. For more details call 0707933993. Powered by Samsung';
$lang['error_message_subscribe']  = 'Please subscribe to buy/sell with MFARM.To subscribe send: join firstname lastname location to 3555. Ex: join john doe nairobi. For more details call 0707933993';

// SMS Reply Messages
$lang['success_sell_message'] = "Thank you for putting your sell orders in MFarm LTD,we will get in touch with you soon. For more details call 0707933993. Powered by Samsung";
$lang['success_buy_message'] = "Thanks for putting your order.To get details on how to get your order call 0707933993. Powered by Samsung";
$lang['success_sub_message'] = "Thank you for subscribing to MFarm. To sell send: sell cropname weight unitprice Example: sell potatoes 3000kgs KES5400. For more call 0707933993.  Powered by Samsung";


/**
 * SMS Susbcribe Messages
 */
$lang['account_update'] = "Hi %s, You have updated your Account. Please call 0707933993 for help.";
$lang['account_update_with_aggregator'] = "Hi %s, You have updated your Account. Your Aggregator Code is %s. For more call 0707933993.";
$lang['error_account_update_with_aggregator'] = "Hi %s, You have updated your Account. The Aggregator Code %s is NOT registered with us please call 0707933993 for help.";
$lang['account_registration'] = "Hi %s, Thank you for choosing M-Farm. Username:%s, Password:%s.To market your produce, Send SELL to 3555 for Kshs 1.00.";
$lang['account_registration_with_aggregator'] = "Thank you %s for Joining Mfarm Aggregation System with code %s. To market your produce with your aggregator, Send SELL to 3555 for Kshs 1.00";
$lang['error_account_registration_with_aggregator'] = "Hi %s, Thank you for choosing M-Farm. The Aggregator %s is NOT registered with us please call 0707933993 for help.";