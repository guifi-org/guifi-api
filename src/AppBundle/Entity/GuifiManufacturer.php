<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiManufacturer
 *
 * @ORM\Table(name="guifi_manufacturer")
 * @ORM\Entity
 */
class GuifiManufacturer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=40, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification;

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

