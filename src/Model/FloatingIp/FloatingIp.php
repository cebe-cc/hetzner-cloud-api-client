<?php
/**
 * @author Carsten Brandt <mail@cebe.cc>
 * @date 15.06.18
 */

namespace Webfoersterei\HetznerCloudApiClient\Model\FloatingIp;

use Webfoersterei\HetznerCloudApiClient\Model\Server\Location;
use Webfoersterei\HetznerCloudApiClient\Model\Server\Ptr;


class FloatingIp
{
    /**
     * @var int ID of the Floating IP.
     */
    public $id;

    /**
     * @var string|null Description of the Floating IP.
     */
    public $description;

    /**
     * @var string IP address of the Floating IP.
     */
    public $ip;

    /**
     * @var string Type of the Floating IP. Choices: ipv4, ipv6.
     */
    public $type;

    /**
     * @var int|null Id of the Server the Floating IP is assigned to, null if it is not assigned at all.
     */
    public $server;

    /**
     * @var Ptr[] Array of reverse DNS entries
     */
    public $dns_ptr;

    /**
     * @var Location Location the Floating IP was created in. Routing is optimized for this location.
     */
    public $home_location;

    /**
     * @var boolean Whether the IP is blocked
     */
    public $blocked;

    /**
     * @var array Protection configuration for the Floating IP
     */
    public $protection;

}
