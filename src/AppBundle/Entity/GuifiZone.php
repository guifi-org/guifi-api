<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiZone
 *
 * @ORM\Table(name="guifi_zone", indexes={@ORM\Index(name="name", columns={"title"}), @ORM\Index(name="master_index", columns={"master"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class GuifiZone
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=10, nullable=true)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="master", type="integer", nullable=false)
     */
    private $master;

    /**
     * @var string
     *
     * @ORM\Column(name="time_zone", type="string", length=15, nullable=false)
     */
    private $timeZone;

    /**
     * @var string
     *
     * @ORM\Column(name="dns_servers", type="string", length=255, nullable=true)
     */
    private $dnsServers;

    /**
     * @var string
     *
     * @ORM\Column(name="ntp_servers", type="string", length=255, nullable=true)
     */
    private $ntpServers;

    /**
     * @var string
     *
     * @ORM\Column(name="graph_server", type="string", length=40, nullable=true)
     */
    private $graphServer;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=true)
     */
    private $homepage;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification = 'guifi@guifi.net';

    /**
     * @var string
     *
     * @ORM\Column(name="ospf_zone", type="string", length=255, nullable=true)
     */
    private $ospfZone;

    /**
     * @var string
     *
     * @ORM\Column(name="minx", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $minx;

    /**
     * @var string
     *
     * @ORM\Column(name="miny", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $miny;

    /**
     * @var string
     *
     * @ORM\Column(name="maxx", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $maxx;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=5, nullable=false)
     */
    private $local = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="nodexchange_url", type="string", length=255, nullable=true)
     */
    private $nodexchangeUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="refresh", type="integer", nullable=true)
     */
    private $refresh;

    /**
     * @var integer
     *
     * @ORM\Column(name="remote_server_id", type="integer", nullable=true)
     */
    private $remoteServerId;

    /**
     * @var string
     *
     * @ORM\Column(name="maxy", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $maxy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="weight", type="boolean", nullable=false)
     */
    private $weight = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created", type="integer", nullable=false)
     */
    private $userCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_changed", type="integer", nullable=false)
     */
    private $userChanged = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_created", type="integer", nullable=false)
     */
    private $timestampCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_changed", type="integer", nullable=false)
     */
    private $timestampChanged = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="proxy_id", type="integer", nullable=false)
     */
    private $proxyId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="voip_id", type="integer", nullable=false)
     */
    private $voipId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="host_nodes", type="smallint", nullable=true)
     */
    private $hostNodes = '0';


}

