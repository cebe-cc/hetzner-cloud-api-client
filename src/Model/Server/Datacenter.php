<?php
/**
 * @author Timo Förster <tfoerster@webfoersterei.de>
 * @date 25.01.18
 */

namespace Webfoersterei\HetznerCloudApiClient\Model\Server;


class Datacenter
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Location
     */
    public $location;
}