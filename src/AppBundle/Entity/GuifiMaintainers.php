<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiMaintainers
 *
 * @ORM\Table(name="guifi_maintainers", indexes={@ORM\Index(name="subject_id", columns={"subject_id"}), @ORM\Index(name="subject_type", columns={"subject_type"})})
 * @ORM\Entity
 */
class GuifiMaintainers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="supplier_id", type="integer", nullable=false)
     */
    private $supplierId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="subject_id", type="integer", nullable=false)
     */
    private $subjectId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_type", type="string", length=15, nullable=false)
     */
    private $subjectType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="commitment", type="string", length=15, nullable=false)
     */
    private $commitment = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sla", type="string", length=15, nullable=false)
     */
    private $sla = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sla_resp", type="smallint", nullable=true)
     */
    private $slaResp;

    /**
     * @var integer
     *
     * @ORM\Column(name="sla_fix", type="smallint", nullable=true)
     */
    private $slaFix;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="smallint", nullable=true)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created", type="integer", nullable=false)
     */
    private $userCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_changed", type="integer", nullable=true)
     */
    private $userChanged;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_created", type="integer", nullable=false)
     */
    private $timestampCreated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp_changed", type="integer", nullable=true)
     */
    private $timestampChanged;


}

