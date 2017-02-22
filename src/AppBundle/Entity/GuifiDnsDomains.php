<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiDnsDomains
 *
 * @ORM\Table(name="guifi_dns_domains")
 * @ORM\Entity
 */
class GuifiDnsDomains
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="public", type="string", length=5, nullable=false)
     */
    private $public = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="ipv4", type="string", length=16, nullable=false)
     */
    private $ipv4;

    /**
     * @var string
     *
     * @ORM\Column(name="defipv4", type="string", length=16, nullable=false)
     */
    private $defipv4;

    /**
     * @var string
     *
     * @ORM\Column(name="defipv6", type="string", length=128, nullable=false)
     */
    private $defipv6;

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="string", length=32, nullable=false)
     */
    private $mname;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", length=16, nullable=false)
     */
    private $scope;

    /**
     * @var string
     *
     * @ORM\Column(name="management", type="string", length=16, nullable=false)
     */
    private $management;

    /**
     * @var string
     *
     * @ORM\Column(name="allow", type="string", length=24, nullable=false)
     */
    private $allow;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification = 'guifi@guifi.net';

    /**
     * @var string
     *
     * @ORM\Column(name="externalmx", type="string", length=128, nullable=false)
     */
    private $externalmx;

    /**
     * @var string
     *
     * @ORM\Column(name="externalns", type="string", length=128, nullable=false)
     */
    private $externalns;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created", type="integer", nullable=false)
     */
    private $userCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_changed", type="integer", nullable=false)
     */
    private $userChanged;

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

