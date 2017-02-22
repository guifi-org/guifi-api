<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiDnsHosts
 *
 * @ORM\Table(name="guifi_dns_hosts")
 * @ORM\Entity
 */
class GuifiDnsHosts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $counter;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=128, nullable=false)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="ipv4", type="string", length=16, nullable=false)
     */
    private $ipv4;

    /**
     * @var string
     *
     * @ORM\Column(name="ipv6", type="string", length=128, nullable=false)
     */
    private $ipv6;

    /**
     * @var string
     *
     * @ORM\Column(name="aliases", type="string", length=1024, nullable=false)
     */
    private $aliases;

    /**
     * @var string
     *
     * @ORM\Column(name="options", type="string", length=1024, nullable=false)
     */
    private $options;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_changed", type="integer", nullable=false)
     */
    private $userChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created", type="integer", nullable=false)
     */
    private $userCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_created", type="integer", nullable=false)
     */
    private $timestampCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_changed", type="integer", nullable=false)
     */
    private $timestampChanged;


}

