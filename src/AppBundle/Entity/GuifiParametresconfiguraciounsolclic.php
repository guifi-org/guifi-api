<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiParametresconfiguraciounsolclic
 *
 * @ORM\Table(name="guifi_parametresConfiguracioUnsolclic")
 * @ORM\Entity
 */
class GuifiParametresconfiguraciounsolclic
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
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uscid", type="integer", nullable=false)
     */
    private $uscid;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255, nullable=false)
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dinamic", type="boolean", nullable=false)
     */
    private $dinamic = '0';

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
     * @ORM\Column(name="user_changed", type="integer", nullable=true)
     */
    private $userChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_created", type="integer", nullable=true)
     */
    private $timestampCreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_changed", type="integer", nullable=true)
     */
    private $timestampChanged;


}

