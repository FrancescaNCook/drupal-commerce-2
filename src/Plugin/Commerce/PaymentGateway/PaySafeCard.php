<?php

namespace Drupal\commerce_multisafepay\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_multisafepay\Helpers\GatewayStandardMethodsHelper;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\SupportsRefundsInterface;

/**
 * Provides the Off-site payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "msp_paysafecard",
 *   label = "MultiSafepay (PaySafeCard)",
 *   display_label = "PaySafeCard",
 *   modes = {
 *     "n/a" = @Translation("N/A"),
 *   },
 *   forms = {
 *     "offsite-payment" =
 *     "Drupal\commerce_multisafepay\PluginForm\StandardPayment\StandardPaymentForm",
 *   },
 * )
 */
class PaySafeCard extends GatewayStandardMethodsHelper implements
    SupportsRefundsInterface {

}
