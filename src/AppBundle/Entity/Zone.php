<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

// https://guifi.net/sites/all/modules/guifi/contrib/api_doc/index.php#method_zone/
/**
 * @ORM\Entity
 */
class Zone
{
    /** FIXME added field to simplify mgmt
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    
    //private $nick;
    //private $zone_mode;
    
    /**
     * @ORM\Column(type="text")
     */
    private $body;
    
    /**
     * @ORM\ManyToOne(targetEntity="Zone")
     */
    private $master;
    
    //private $time_zone;
    // TODO relation private $graph_server;
    // TODO relation private $proxy_server;
    // TODO relation private $dns_servers;
    // TODO relation private $ntp_server;
    // TODO relation private $ospf_zone;
    //private $homepage;
    //private $notification;
    //private $minx;
    //private $miny;
    //private $maxx;
    //private $maxy;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Zone
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Zone
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set master
     *
     * @param \AppBundle\Entity\Zone $master
     *
     * @return Zone
     */
    public function setMaster(\AppBundle\Entity\Zone $master = null)
    {
        $this->master = $master;

        return $this;
    }

    /**
     * Get master
     *
     * @return \AppBundle\Entity\Zone
     */
    public function getMaster()
    {
        return $this->master;
    }
}
