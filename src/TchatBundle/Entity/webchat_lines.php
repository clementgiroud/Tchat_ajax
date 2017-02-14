<?php

namespace TchatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * webchat_lines
 *
 * @ORM\Table(name="webchat_lines")
 * @ORM\Entity(repositoryClass="TchatBundle\Repository\webchat_linesRepository")
 */
class webchat_lines
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="gravatar", type="string", length=32)
     */
    private $gravatar;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ts", type="datetime")
     */
    private $ts;


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
     * Set author
     *
     * @param string $author
     *
     * @return webchat_lines
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set gravatar
     *
     * @param string $gravatar
     *
     * @return webchat_lines
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
     * Set text
     *
     * @param string $text
     *
     * @return webchat_lines
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return webchat_lines
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime
     */
    public function getTs()
    {
        return $this->ts;
    }
}

