<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiTypes
 *
 * @ORM\Table(name="guifi_types", indexes={@ORM\Index(name="text", columns={"text"}), @ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class GuifiTypes
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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=24, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="relations", type="text", nullable=true)
     */
    private $relations;


}

