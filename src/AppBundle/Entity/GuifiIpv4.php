<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiIpv4
 *
 * @ORM\Table(name="guifi_ipv4", uniqueConstraints={@ORM\UniqueConstraint(name="ipv4", columns={"ipv4"})}, indexes={@ORM\Index(name="interface_id", columns={"interface_id"})})
 * @ORM\Entity
 */
class GuifiIpv4
{
    /**
     * @var integer
     *
     * @ORM\Column(name="interface_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $interfaceId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ipv4", type="string", length=16, nullable=true)
     */
    private $ipv4;

    /**
     * @var string
     *
     * @ORM\Column(name="netmask", type="string", length=16, nullable=false)
     */
    private $netmask = '255.255.255.0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ipv4_type", type="integer", nullable=false)
     */
    private $ipv4Type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false)
     */
    private $zoneId = '0';


}

