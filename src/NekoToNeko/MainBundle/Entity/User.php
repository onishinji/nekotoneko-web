<?php

namespace NekoToNeko\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NekoToNeko\MainBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="iphone_token", type="string", length=255, nullable=true)
     */
    private $iphone_token;


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
     * Set iphone_token
     *
     * @param string $iphoneToken
     * @return User
     */
    public function setIphoneToken($iphoneToken)
    {
        $this->iphone_token = $iphoneToken;
    
        return $this;
    }

    /**
     * Get iphone_token
     *
     * @return string 
     */
    public function getIphoneToken()
    {
        return $this->iphone_token;
    }
}
