<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FarmSpecialityMvtCategory
 *
 * @ORM\Table(name="farm_speciality_mvt_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FarmSpecialityMvtCategoryRepository")
 */
class FarmSpecialityMvtCategory
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movements = new ArrayCollection();
    }

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
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FarmSpecialityMvt", mappedBy="category", cascade={"persist","remove"})
     */
    private $movements;

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
     * @return FarmSpecialityMvtCategory
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
     * Add movement
     *
     * @param \AppBundle\Entity\FarmSpecialityMvt $movement
     * @return FarmSpecialityMvtCategory
     */
    public function addMovement(FarmSpecialityMvt $movement)
    {
        $this->movements[] = $movement;

        return $this;
    }

    /**
     * Remove movement
     *
     * @param \AppBundle\Entity\FarmSpecialityMvt $movement
     */
    public function removeMovement(FarmSpecialityMvt $movement)
    {
        $this->movements->removeElement($movement);

        $movement->setCategory(""); // That's a problem because its Category cannot be null... Should be resolved soon
    }

    /**
     * Get movements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovements()
    {
        return $this->movements;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }
}

