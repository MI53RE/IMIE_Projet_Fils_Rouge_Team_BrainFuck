<?php

namespace TBFBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users_Skills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TBFBundle\Entity\Users_SkillsRepository")
 */
class Users_Skills
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="skills")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Skills", inversedBy="users")
     * @ORM\JoinColumn(name="skills_id", referencedColumnName="id")
     */
    private $skills;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


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
     * Set users
     *
     * @param integer $users
     * @return Users_Skills
     */
    public function setUsers($users)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return integer 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set skills
     *
     * @param integer $skills
     * @return Users_Skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    
        return $this;
    }

    /**
     * Get skills
     *
     * @return integer 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Users_Skills
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }
}
