<?php

namespace MagicWordBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grid.
 *
 * @ORM\Table(name="grid")
 * @ORM\Entity(repositoryClass="MagicWordBundle\Repository\GridRepository")
 */
class Grid
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
     * @var int
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="width", type="integer")
     */
    private $width;

    /**
     * @ORM\OneToMany(targetEntity="Square", mappedBy="grid")
     */
    protected $squares;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set height.
     *
     * @param int $height
     *
     * @return Grid
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width.
     *
     * @param int $width
     *
     * @return Grid
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->squares = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add square
     *
     * @param \MagicWordBundle\Entity\Square $square
     *
     * @return Grid
     */
    public function addSquare(\MagicWordBundle\Entity\Square $square)
    {
        $this->squares[] = $square;

        return $this;
    }

    /**
     * Remove square
     *
     * @param \MagicWordBundle\Entity\Square $square
     */
    public function removeSquare(\MagicWordBundle\Entity\Square $square)
    {
        $this->squares->removeElement($square);
    }

    /**
     * Get squares
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSquares()
    {
        return $this->squares;
    }
}
