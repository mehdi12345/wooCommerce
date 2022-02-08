<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress',
    'ck_901d97366cdebdf7e23435bc15fc56e43466fdf7',
    'cs_7990ba51e4c901bdf43b67134e6cb5a6b47b2866',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>
<?php echo json_encode($woocommerce->get('orders')); ?>