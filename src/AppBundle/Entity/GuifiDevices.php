<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiDevices
 *
 * @ORM\Table(name="guifi_devices", uniqueConstraints={@ORM\UniqueConstraint(name="nick", columns={"nick"})}, indexes={@ORM\Index(name="nid_index", columns={"nid"}), @ORM\Index(name="nid", columns={"nid"})})
 * @ORM\Entity
 */
class GuifiDevices
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
     * @ORM\Column(name="nid", type="integer", nullable=false)
     */
    private $nid;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=40, nullable=false)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification = 'guifi@guifi.net';

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=20, nullable=false)
     */
    private $mac = '00:00:00:00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=40, nullable=false)
     */
    private $flag = 'Planned';

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=true)
     */
    private $extra;

    /**
     * @var integer
     *
     * @ORM\Column(name="usc_id", type="integer", nullable=false)
     */
    private $uscId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid;

    /**
     * @var integer
     *
     * @ORM\Column(name="graph_server", type="integer", nullable=false)
     */
    private $graphServer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logserver", type="string", length=60, nullable=false)
     */
    private $logserver;

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
     * @ORM\Column(name="last_online", type="integer", nullable=false)
     */
    private $lastOnline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_flag", type="string", length=40, nullable=false)
     */
    private $lastFlag = 'N/A';

    /**
     * @var string
     *
     * @ORM\Column(name="ly_availability", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $lyAvailability;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_stats", type="integer", nullable=false)
     */
    private $lastStats = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="latency_avg", type="smallint", nullable=false)
     */
    private $latencyAvg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="latency_max", type="smallint", nullable=false)
     */
    private $latencyMax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mainipv4", type="string", length=20, nullable=true)
     */
    private $mainipv4;


}

