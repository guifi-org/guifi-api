<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiServices
 *
 * @ORM\Table(name="guifi_services", indexes={@ORM\Index(name="zone_index", columns={"zone_id"}), @ORM\Index(name="service_type", columns={"service_type"})})
 * @ORM\Entity
 */
class GuifiServices
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
     * @var string
     *
     * @ORM\Column(name="service_type", type="string", length=40, nullable=false)
     */
    private $serviceType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=true)
     */
    private $zoneId;

    /**
     * @var integer
     *
     * @ORM\Column(name="device_id", type="integer", nullable=true)
     */
    private $deviceId;

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
     * @ORM\Column(name="extra", type="text", nullable=true)
     */
    private $extra;

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

