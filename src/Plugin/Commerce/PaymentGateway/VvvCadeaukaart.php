<?php

namespace Drupal\commerce_multisafepay\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_multisafepay\Helpers\GatewayStandardMethodsHelper;
use Drupal\commerce_payment\Plugin\Commerce\PaymentGateway\SupportsRefundsInterface;

/**
 * Provides the Off-Site payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "msp_vvvcadeaukaart",
 *   label = "MultiSafepay (VVV Cadeaukaart)",
 *   display_label = "VVV Cadeaukaart",
 *   modes = {
 *     "n/a" = @Translation("N/A"),
 *   },
 *   forms = {
 *     "offsite-payment" =
 *     "Drupal\commerce_multisafepay\PluginForm\StandardPayment\StandardPaymentForm",
 *   },
 * )
 */
class VvvCadeaukaart extends GatewayStandardMethodsHelper implements
    SupportsRefundsInterface {

}
