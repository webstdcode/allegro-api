<?php

namespace Ircykk\AllegroApi\Rest\Sale;

use Ircykk\AllegroApi\Rest\AbstractRestResource;

/**
 * Class Commands.
 *
 * @link https://developer.allegro.pl/documentation/#/offer-management
 *
 * @package Ircykk\AllegroApi\Rest
 */
class ProductProposals extends AbstractRestResource
{

    public function create(array $params)
    {
        return $this->post('/sale/product-proposals', $params);
    }

}
