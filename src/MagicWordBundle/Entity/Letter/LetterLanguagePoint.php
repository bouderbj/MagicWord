<?php

namespace MagicWordBundle\Entity\Letter;

use Doctrine\ORM\Mapping as ORM;

/**
 * LetterLanguagePoint.
 *
 * @ORM\Table(name="letter_letter_language_point")
 * @ORM\Entity()
 */
class LetterLanguagePoint
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
     * @ORM\Column(name="point", type="integer")
     */
    private $point;

    /**
     * @ORM\ManyToOne(targetEntity="CanonicLetter")
     */
    protected $letter;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Language")
     */
    protected $language;

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
     * Set point.
     *
     * @param int $point
     *
     * @return LetterLanguagePoint
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point.
     *
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set letter
     *
     * @param \MagicWordBundle\Entity\Letter\CanonicLetter $letter
     *
     * @return LetterLanguagePoint
     */
    public function setLetter(\MagicWordBundle\Entity\Letter\CanonicLetter $letter = null)
    {
        $this->letter = $letter;

        return $this;
    }

    /**
     * Get letter
     *
     * @return \MagicWordBundle\Entity\Letter\CanonicLetter
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set language
     *
     * @param \MagicWordBundle\Entity\Language $language
     *
     * @return LetterLanguagePoint
     */
    public function setLanguage(\MagicWordBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \MagicWordBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
