<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiLocation
 *
 * @ORM\Table(name="guifi_location", indexes={@ORM\Index(name="lat_index", columns={"lat"}), @ORM\Index(name="lon_index", columns={"lon"}), @ORM\Index(name="zcs_index", columns={"zone_id", "timestamp_created", "status_flag"}), @ORM\Index(name="year_index", columns={"timestamp_created"}), @ORM\Index(name="status_index", columns={"status_flag"})})
 * @ORM\Entity
 */
class GuifiLocation
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
     * @ORM\Column(name="nick", type="string", length=40, nullable=false)
     */
    private $nick = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=true)
     */
    private $zoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="zone_description", type="string", length=255, nullable=true)
     */
    private $zoneDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $lon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="elevation", type="boolean", nullable=true)
     */
    private $elevation;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification = 'guifi@guifi.net';

    /**
     * @var string
     *
     * @ORM\Column(name="status_flag", type="string", length=40, nullable=false)
     */
    private $statusFlag = 'Planned';

    /**
     * @var string
     *
     * @ORM\Column(name="stable", type="string", length=25, nullable=false)
     */
    private $stable = 'Yes';

    /**
     * @var integer
     *
     * @ORM\Column(name="graph_server", type="integer", nullable=false)
     */
    private $graphServer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created", type="integer", nullable=false)
     */
    private $userCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_changed", type="integer", nullable=true)
     */
    private $userChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_created", type="integer", nullable=false)
     */
    private $timestampCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_changed", type="integer", nullable=true)
     */
    private $timestampChanged;


}

