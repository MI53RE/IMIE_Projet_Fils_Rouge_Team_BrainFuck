<?php

namespace TBFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TBFBundle\Entity\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var \ArrayCollection
     * @ORM\ManyToMany(targetEntity="Projects", inversedBy="members", cascade={"persist"})
     * @ORM\JoinTable(name="users_projects",
     *      joinColumns={@ORM\JoinColumn(name="users_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="projects_id", referencedColumnName="id")}
     *      )
     */
    private $projects;
    

    /**
     *
     * @ORM\OneToMany(targetEntity="UsersSkills", mappedBy="users", cascade={"persist"})
     */
    private $skills;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set projects
     *
     * @param array $projects
     * @return Users
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
    
        return $this;
    }

    /**
     * Get projects
     *
     * @return array 
     */
    public function getProjects()
    {
        return $this->projects;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projects
     *
     * @param \TBFBundle\Entity\Projects $projects
     * @return Users
     */
    public function addProject(\TBFBundle\Entity\Projects $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \TBFBundle\Entity\Projects $projects
     */
    public function removeProject(\TBFBundle\Entity\Projects $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Add skills
     *
     * @param \TBFBundle\Entity\Skills $skills
     * @return Users
     */
    public function addSkill(\TBFBundle\Entity\Skills $skills)
    {
        $this->skills[] = $skills;

        return $this;
    }

    /**
     * Remove skills
     *
     * @param \TBFBundle\Entity\Skills $skills
     */
    public function removeSkill(\TBFBundle\Entity\Skills $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }
}
