<?php

namespace TBFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

/**
 * Projects
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TBFBundle\Entity\ProjectsRepository")
 */
class Projects
{
    /**
     * @var integer
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \ArrayCollection
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="projects", cascade={"persist"})
     * @ORM\JoinTable(name="users_projects",
     *      joinColumns={@ORM\JoinColumn(name="users_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="projects_id", referencedColumnName="id")}
     *      )
     */
    private $members;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @ORM\ManyToMany(targetEntity="Skills")
     * @ORM\JoinTable(name="projects_skills", 
     *      joinColumns = {@ORM\JoinColumn(name="project_id",
     *      referencedColumnName="id")}, 
     *      inverseJoinColumns = {@ORM\JoinColumn(name="skill_id",
     *      referencedColumnName="id", unique=true)}
     *  )
     */
    private $requiredSkills;
    public function __construct(){
        $this->requiredSkills = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Projects
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
     * Set description
     *
     * @param string $description
     * @return Projects
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set members
     *
     * @param array $members
     * @return Projects
     */
    public function setMembers($members)
    {
        $this->members = $members;
    
        return $this;
    }

    /**
     * Get members
     *
     * @return array 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Projects
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set requiredSkills
     *
     * @param array $requiredSkills
     * @return Projects
     */
    public function addRequiredSkills($requiredSkills)
    {
        $this->requiredSkills[] = $requiredSkills;
    
        return $this;
    }

    /**
     * Get requiredSkills
     *
     * @return array 
     */
    public function getRequiredSkills()
    {
        return $this->requiredSkills;
    }
}