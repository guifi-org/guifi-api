<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiRadios
 *
 * @ORM\Table(name="guifi_radios", indexes={@ORM\Index(name="nid", columns={"nid"})})
 * @ORM\Entity
 */
class GuifiRadios
{
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
     * @ORM\Column(name="radiodev_counter", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $radiodevCounter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nid", type="integer", nullable=false)
     */
    private $nid;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer", nullable=false)
     */
    private $modelId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etherdev_counter", type="boolean", nullable=true)
     */
    private $etherdevCounter;

    /**
     * @var string
     *
     * @ORM\Column(name="ssid", type="string", length=128, nullable=false)
     */
    private $ssid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=40, nullable=false)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="protocol", type="string", length=40, nullable=false)
     */
    private $protocol = '802.11bg';

    /**
     * @var integer
     *
     * @ORM\Column(name="channel", type="integer", nullable=true)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="chbandwith", type="string", length=8, nullable=false)
     */
    private $chbandwith = '20Mhz';

    /**
     * @var integer
     *
     * @ORM\Column(name="antenna_angle", type="integer", nullable=true)
     */
    private $antennaAngle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="antenna_gain", type="integer", nullable=true)
     */
    private $antennaGain;

    /**
     * @var integer
     *
     * @ORM\Column(name="antenna_azimuth", type="integer", nullable=true)
     */
    private $antennaAzimuth = '360';

    /**
     * @var string
     *
     * @ORM\Column(name="clients_accepted", type="string", length=5, nullable=true)
     */
    private $clientsAccepted = 'Yes';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_mode", type="string", length=5, nullable=false)
     */
    private $antennaMode;

    /**
     * @var string
     *
     * @ORM\Column(name="ly_mb_in", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lyMbIn;

    /**
     * @var string
     *
     * @ORM\Column(name="ly_mb_out", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $lyMbOut;

    /**
     * @var string
     *
     * @ORM\Column(name="fund_required", type="string", length=5, nullable=true)
     */
    private $fundRequired;

    /**
     * @var string
     *
     * @ORM\Column(name="fund_amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $fundAmount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fund_currency", type="string", length=10, nullable=false)
     */
    private $fundCurrency = 'Euros';

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=20, nullable=true)
     */
    private $mac;


}

