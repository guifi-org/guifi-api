<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiNetworks
 *
 * @ORM\Table(name="guifi_networks", uniqueConstraints={@ORM\UniqueConstraint(name="networks", columns={"base", "mask"})}, indexes={@ORM\Index(name="net_zone", columns={"zone"})})
 * @ORM\Entity
 */
class GuifiNetworks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="base", type="string", length=255, nullable=false)
     */
    private $base = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=255, nullable=false)
     */
    private $mask = '255.255.255.0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="integer", nullable=false)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="network_type", type="string", length=10, nullable=false)
     */
    private $networkType = 'public';

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


}

