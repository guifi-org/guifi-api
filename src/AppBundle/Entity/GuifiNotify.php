<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiNotify
 *
 * @ORM\Table(name="guifi_notify")
 * @ORM\Entity
 */
class GuifiNotify
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
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="who_id", type="integer", nullable=false)
     */
    private $whoId;

    /**
     * @var string
     *
     * @ORM\Column(name="who_name", type="string", length=255, nullable=false)
     */
    private $whoName;

    /**
     * @var string
     *
     * @ORM\Column(name="to_array", type="string", length=1024, nullable=false)
     */
    private $toArray;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;


}

