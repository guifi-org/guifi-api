<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiUsers
 *
 * @ORM\Table(name="guifi_users", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class GuifiUsers
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
     * @ORM\Column(name="nid", type="integer", nullable=false)
     */
    private $nid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="services", type="text", nullable=false)
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=60, nullable=false)
     */
    private $firstname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=60, nullable=false)
     */
    private $lastname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=40, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password = '2c57ea903930c8530a4c71af00b6e749';

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=1024, nullable=false)
     */
    private $notification = 'guifi@guifi.net';

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=true)
     */
    private $extra;

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

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=false)
     */
    private $status = 'new';

    /**
     * @var string
     *
     * @ORM\Column(name="content_filters", type="text", nullable=true)
     */
    private $contentFilters;


}

