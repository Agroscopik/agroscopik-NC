<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fertilizer
 *
 * @ORM\Table(name="fertilizer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FertilizerRepository")
 */
class Fertilizer
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=255, nullable=true)
     */
    private $formula;

    /**
     * @var float
     *
     * @ORM\Column(name="N", type="float", nullable=true)
     */
    private $n;

    /**
     * @var float
     *
     * @ORM\Column(name="P2O5", type="float", nullable=true)
     */
    private $p2O5;

    /**
     * @var float
     *
     * @ORM\Column(name="K2O", type="float", nullable=true)
     */
    private $k2O;

    /**
     * @var float
     *
     * @ORM\Column(name="CaO", type="float", nullable=true)
     */
    private $caO;

    /**
     * @var float
     *
     * @ORM\Column(name="MgO", type="float", nullable=true)
     */
    private $mgO;

    /**
     * @var float
     *
     * @ORM\Column(name="Fe", type="float", nullable=true)
     */
    private $fe;

    /**
     * @var float
     *
     * @ORM\Column(name="SO3", type="float", nullable=true)
     */
    private $sO3;

    /**
     * @var float
     *
     * @ORM\Column(name="Zn", type="float", nullable=true)
     */
    private $zn;

    /**
     * @var float
     *
     * @ORM\Column(name="B", type="float", nullable=true)
     */
    private $b;

    /**
     * @var float
     *
     * @ORM\Column(name="Mn", type="float", nullable=true)
     */
    private $mn;

    /**
     * @var float
     *
     * @ORM\Column(name="Cu", type="float", nullable=true)
     */
    private $cu;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;


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
     * @return Fertilizer
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
     * Set formula
     *
     * @param string $formula
     *
     * @return Fertilizer
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set n
     *
     * @param float $n
     *
     * @return Fertilizer
     */
    public function setN($n)
    {
        $this->n = $n;

        return $this;
    }

    /**
     * Get n
     *
     * @return float
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Set p2O5
     *
     * @param float $p2O5
     *
     * @return Fertilizer
     */
    public function setP2O5($p2O5)
    {
        $this->p2O5 = $p2O5;

        return $this;
    }

    /**
     * Get p2O5
     *
     * @return float
     */
    public function getP2O5()
    {
        return $this->p2O5;
    }

    /**
     * Set k2O
     *
     * @param float $k2O
     *
     * @return Fertilizer
     */
    public function setK2O($k2O)
    {
        $this->k2O = $k2O;

        return $this;
    }

    /**
     * Get k2O
     *
     * @return float
     */
    public function getK2O()
    {
        return $this->k2O;
    }

    /**
     * Set caO
     *
     * @param float $caO
     *
     * @return Fertilizer
     */
    public function setCaO($caO)
    {
        $this->caO = $caO;

        return $this;
    }

    /**
     * Get caO
     *
     * @return float
     */
    public function getCaO()
    {
        return $this->caO;
    }

    /**
     * Set mgO
     *
     * @param float $mgO
     *
     * @return Fertilizer
     */
    public function setMgO($mgO)
    {
        $this->mgO = $mgO;

        return $this;
    }

    /**
     * Get mgO
     *
     * @return float
     */
    public function getMgO()
    {
        return $this->mgO;
    }

    /**
     * Set fe
     *
     * @param float $fe
     *
     * @return Fertilizer
     */
    public function setFe($fe)
    {
        $this->fe = $fe;

        return $this;
    }

    /**
     * Get fe
     *
     * @return float
     */
    public function getFe()
    {
        return $this->fe;
    }

    /**
     * Set sO3
     *
     * @param float $sO3
     *
     * @return Fertilizer
     */
    public function setSO3($sO3)
    {
        $this->sO3 = $sO3;

        return $this;
    }

    /**
     * Get sO3
     *
     * @return float
     */
    public function getSO3()
    {
        return $this->sO3;
    }

    /**
     * Set zn
     *
     * @param float $zn
     *
     * @return Fertilizer
     */
    public function setZn($zn)
    {
        $this->zn = $zn;

        return $this;
    }

    /**
     * Get zn
     *
     * @return float
     */
    public function getZn()
    {
        return $this->zn;
    }

    /**
     * Set b
     *
     * @param float $b
     *
     * @return Fertilizer
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get b
     *
     * @return float
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set mn
     *
     * @param float $mn
     *
     * @return Fertilizer
     */
    public function setMn($mn)
    {
        $this->mn = $mn;

        return $this;
    }

    /**
     * Get mn
     *
     * @return float
     */
    public function getMn()
    {
        return $this->mn;
    }

    /**
     * Set cu
     *
     * @param float $cu
     *
     * @return Fertilizer
     */
    public function setCu($cu)
    {
        $this->cu = $cu;

        return $this;
    }

    /**
     * Get cu
     *
     * @return float
     */
    public function getCu()
    {
        return $this->cu;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Fertilizer
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
