<?php
/**
 * @author Carsten Brandt <mail@cebe.cc>
 * @date 15.06.18
 */

namespace Webfoersterei\HetznerCloudApiClient\Model\FloatingIp;


use Webfoersterei\HetznerCloudApiClient\Model\ErrorResponse;

class GetResponse extends ErrorResponse
{

    /**
     * @var FloatingIp
     */
    public $floating_ip;

}
