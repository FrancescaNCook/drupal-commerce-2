<?php

namespace Drupal\commerce_multisafepay\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_multisafepay\Helpers\GatewayStandardMethodsHelper;

/**
 * Provides the Off-site payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "msp_babygiftcard",
 *   label = "MultiSafepay (Babygiftcard)",
 *   display_label = "Babygiftcard",
 *   modes = {
 *     "n/a" = @Translation("N/A"),
 *   },
 *   forms = {
 *     "offsite-payment" =
 *     "Drupal\commerce_multisafepay\PluginForm\StandardPayment\StandardPaymentForm",
 *   },
 * )
 */
class Babygiftcard extends GatewayStandardMethodsHelper {

}
