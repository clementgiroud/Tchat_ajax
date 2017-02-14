<?php

namespace TchatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * webchat_users
 *
 * @ORM\Table(name="webchat_users")
 * @ORM\Entity(repositoryClass="TchatBundle\Repository\webchat_usersRepository")
 */
class webchat_users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="gravatar", type="string", length=255)
     */
    private $gravatar;

    /**
     * @var string
     *
     * @ORM\Column(name="last_activity", type="datetime")
     */
    private $lastActivity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return webchat_users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set gravatar
     *
     * @param string $gravatar
     *
     * @return webchat_users
     */
    public function setGravatar($gravatar)
    {
        $this->gravatar = $gravatar;

        return $this;
    }

    /**
     * Get gravatar
     *
     * @return string
     */
    public function getGravatar()
    {
        return $this->gravatar;
    }

    /**
     * Set lastActivity
     *
     * @param string $lastActivity
     *
     * @return webchat_users
     */
    public function setLastActivity($lastActivity)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return string
     */
    public function getLastActivity()
    {
        return $this->lastActivity;
    }
}

