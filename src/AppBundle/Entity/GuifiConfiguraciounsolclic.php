<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiConfiguraciounsolclic
 *
 * @ORM\Table(name="guifi_configuracioUnSolclic")
 * @ORM\Entity
 */
class GuifiConfiguraciounsolclic
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
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=true)
     */
    private $enabled = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="snmp_id", type="string", length=32, nullable=false)
     */
    private $snmpId;

    /**
     * @var string
     *
     * @ORM\Column(name="plantilla", type="text", length=65535, nullable=true)
     */
    private $plantilla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tipologia", type="boolean", nullable=false)
     */
    private $tipologia = '0';

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
     * @ORM\Column(name="template_file", type="string", length=45, nullable=true)
     */
    private $templateFile;


}

