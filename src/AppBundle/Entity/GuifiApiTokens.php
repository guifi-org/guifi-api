<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GuifiApiTokens
 *
 * @ORM\Table(name="guifi_api_tokens")
 * @ORM\Entity
 */
class GuifiApiTokens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="rand_key", type="integer", nullable=false)
     */
    private $randKey;


}

