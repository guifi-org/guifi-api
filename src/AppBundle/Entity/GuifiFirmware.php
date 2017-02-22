<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiFirmware
 *
 * @ORM\Table(name="guifi_firmware")
 * @ORM\Entity
 */
class GuifiFirmware
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcio", type="string", length=45, nullable=false)
     */
    private $descripcio;

    /**
     * @var string
     *
     * @ORM\Column(name="relations", type="string", length=45, nullable=true)
     */
    private $relations;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled = '0';

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

    /**
     * @var string
     *
     * @ORM\Column(name="managed", type="string", length=100, nullable=true)
     */
    private $managed;


}

