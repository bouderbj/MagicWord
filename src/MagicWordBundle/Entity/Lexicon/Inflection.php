<?php

namespace MagicWordBundle\Entity\Lexicon;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * Inflection.
 *
 * @ORM\Table(name="inflection")
 * @ORM\Entity(repositoryClass="MagicWordBundle\Repository\Lexicon\InflectionRepository")
 */
class Inflection implements JsonSerializable
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
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Language")
     */
    private $language;

    /**
     * @ORM\ManyToMany(targetEntity="MagicWordBundle\Entity\Grid", mappedBy="inflections")
     */
    private $grids;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Lemma")
     */
    private $lemma;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="cleaned_content", type="string", length=255)
     */
    private $cleanedContent;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Number")
     */
    private $number;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Gender")
     */
    private $gender;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Tense")
     */
    private $tense;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Person")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="MagicWordBundle\Entity\Lexicon\Mood")
     */
    private $mood;

    /**
     * @var string
     *
     * @ORM\Column(name="phonetic1", type="string", length=255)
     */
    private $phonetic1;

    /**
     * @var string
     *
     * @ORM\Column(name="phonetic2", type="string", length=255)
     */
    private $phonetic2;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    public function __construct()
    {
        $this->grids = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set content.
     *
     * @param string $content
     *
     * @return Inflection
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set phonetic1.
     *
     * @param string $phonetic1
     *
     * @return Inflection
     */
    public function setPhonetic1($phonetic1)
    {
        $this->phonetic1 = $phonetic1;

        return $this;
    }

    /**
     * Get phonetic1.
     *
     * @return string
     */
    public function getPhonetic1()
    {
        return $this->phonetic1;
    }

    /**
     * Set phonetic2.
     *
     * @param string $phonetic2
     *
     * @return Inflection
     */
    public function setPhonetic2($phonetic2)
    {
        $this->phonetic2 = $phonetic2;

        return $this;
    }

    /**
     * Get phonetic2.
     *
     * @return string
     */
    public function getPhonetic2()
    {
        return $this->phonetic2;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Inflection
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set lemma.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Lemma $lemma
     *
     * @return Inflection
     */
    public function setLemma(\MagicWordBundle\Entity\Lexicon\Lemma $lemma = null)
    {
        $this->lemma = $lemma;

        return $this;
    }

    /**
     * Get lemma.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Lemma
     */
    public function getLemma()
    {
        return $this->lemma;
    }

    /**
     * Set number.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Number $number
     *
     * @return Inflection
     */
    public function setNumber(\MagicWordBundle\Entity\Lexicon\Number $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set gender.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Gender $gender
     *
     * @return Inflection
     */
    public function setGender(\MagicWordBundle\Entity\Lexicon\Gender $gender = null)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set tense.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Tense $tense
     *
     * @return Inflection
     */
    public function setTense(\MagicWordBundle\Entity\Lexicon\Tense $tense = null)
    {
        $this->tense = $tense;

        return $this;
    }

    /**
     * Get tense.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Tense
     */
    public function getTense()
    {
        return $this->tense;
    }

    /**
     * Set person.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Person $person
     *
     * @return Inflection
     */
    public function setPerson(\MagicWordBundle\Entity\Lexicon\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set mood.
     *
     * @param \MagicWordBundle\Entity\Lexicon\Mood $mood
     *
     * @return Inflection
     */
    public function setMood(\MagicWordBundle\Entity\Lexicon\Mood $mood = null)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * Get mood.
     *
     * @return \MagicWordBundle\Entity\Lexicon\Mood
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set cleanedContent.
     *
     * @param string $cleanedContent
     *
     * @return Inflection
     */
    public function setCleanedContent($cleanedContent)
    {
        $this->cleanedContent = $cleanedContent;

        return $this;
    }

    /**
     * Get cleanedContent.
     *
     * @return string
     */
    public function getCleanedContent()
    {
        return $this->cleanedContent;
    }

    /**
     * Add grid.
     *
     * @param \MagicWordBundle\Entity\Grid $grid
     *
     * @return Inflection
     */
    public function addGrid(\MagicWordBundle\Entity\Grid $grid)
    {
        $this->grids[] = $grid;

        return $this;
    }

    /**
     * Remove grid.
     *
     * @param \MagicWordBundle\Entity\Grid $grid
     */
    public function removeGrid(\MagicWordBundle\Entity\Grid $grid)
    {
        $this->grids->removeElement($grid);
    }

    /**
     * Get grids.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrids()
    {
        return $this->grids;
    }

    /**
     * Set language.
     *
     * @param \MagicWordBundle\Entity\Language $language
     *
     * @return Game
     */
    public function setLanguage(\MagicWordBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language.
     *
     * @return \MagicWordBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'content' => $this->content,
            'cleanedContent' => $this->cleanedContent,
        );
    }
}