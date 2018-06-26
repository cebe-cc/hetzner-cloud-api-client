<?php
/**
 * @author Carsten Brandt <mail@cebe.cc>
 * @date 15.06.18
 */

namespace Webfoersterei\HetznerCloudApiClient\Model\FloatingIp;


use Webfoersterei\HetznerCloudApiClient\Model\ErrorResponse;
use Webfoersterei\HetznerCloudApiClient\Model\MetaResponseTrait;

class GetAllResponse extends ErrorResponse
{
    use MetaResponseTrait;

    /**
     * @var FloatingIp[]|null
     */
    public $floating_ips;

}
