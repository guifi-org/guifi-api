<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiInterfaces
 *
 * @ORM\Table(name="guifi_interfaces", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="device_id", columns={"device_id"})})
 * @ORM\Entity
 */
class GuifiInterfaces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="device_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deviceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="radiodev_counter", type="boolean", nullable=true)
     */
    private $radiodevCounter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etherdev_counter", type="boolean", nullable=true)
     */
    private $etherdevCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="interface_class", type="string", length=40, nullable=true)
     */
    private $interfaceClass;

    /**
     * @var string
     *
     * @ORM\Column(name="interface_type", type="string", length=40, nullable=false)
     */
    private $interfaceType;

    /**
     * @var string
     *
     * @ORM\Column(name="related_interfaces", type="string", length=120, nullable=true)
     */
    private $relatedInterfaces;

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=20, nullable=false)
     */
    private $mac = '00:00:00:00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="connector_type", type="string", length=10, nullable=true)
     */
    private $connectorType;

    /**
     * @var string
     *
     * @ORM\Column(name="vlan", type="string", length=10, nullable=true)
     */
    private $vlan;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=64, nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="connto_did", type="integer", nullable=true)
     */
    private $conntoDid;

    /**
     * @var integer
     *
     * @ORM\Column(name="connto_iid", type="integer", nullable=true)
     */
    private $conntoIid;


}

