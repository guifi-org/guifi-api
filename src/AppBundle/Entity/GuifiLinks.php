<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiLinks
 *
 * @ORM\Table(name="guifi_links", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="device_index", columns={"device_id"}), @ORM\Index(name="nid_index", columns={"nid"})})
 * @ORM\Entity
 */
class GuifiLinks
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
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer", nullable=false)
     */
    private $nid;

    /**
     * @var integer
     *
     * @ORM\Column(name="interface_id", type="integer", nullable=false)
     */
    private $interfaceId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ipv4_id", type="boolean", nullable=false)
     */
    private $ipv4Id;

    /**
     * @var string
     *
     * @ORM\Column(name="link_type", type="string", length=40, nullable=false)
     */
    private $linkType;

    /**
     * @var string
     *
     * @ORM\Column(name="routing", type="string", length=40, nullable=true)
     */
    private $routing;

    /**
     * @var string
     *
     * @ORM\Column(name="flag", type="string", length=40, nullable=false)
     */
    private $flag = 'Planned';


}

