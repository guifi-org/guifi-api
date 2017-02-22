<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiModelSpecs
 *
 * @ORM\Table(name="guifi_model_specs")
 * @ORM\Entity
 */
class GuifiModelSpecs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=40, nullable=false)
     */
    private $model = '';

    /**
     * @var string
     *
     * @ORM\Column(name="model_class", type="string", length=240, nullable=false)
     */
    private $modelClass = 'wireless|router';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="radiodev_max", type="boolean", nullable=false)
     */
    private $radiodevMax = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="etherdev_max", type="boolean", nullable=false)
     */
    private $etherdevMax = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="optoports_max", type="boolean", nullable=false)
     */
    private $optoportsMax = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rackeable", type="boolean", nullable=false)
     */
    private $rackeable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AP", type="string", length=5, nullable=true)
     */
    private $ap;

    /**
     * @var string
     *
     * @ORM\Column(name="virtualAP", type="string", length=5, nullable=false)
     */
    private $virtualap = 'No';

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=5, nullable=true)
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="interfaces", type="string", length=240, nullable=true)
     */
    private $interfaces;

    /**
     * @var string
     *
     * @ORM\Column(name="winterfaces", type="string", length=240, nullable=true)
     */
    private $winterfaces;

    /**
     * @var string
     *
     * @ORM\Column(name="opto_interfaces", type="string", length=240, nullable=true)
     */
    private $optoInterfaces;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=240, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=240, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="supported", type="string", length=25, nullable=false)
     */
    private $supported = 'Yes';

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

