<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
// para poder usar la interfaz del usuario en el controlador
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="uk_users_email_nick", columns={"email", "nick"})})
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     * @Assert\NotBLank
     * @Assert\Regex("/[a-zA-Z ]+/")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=200, nullable=false)
     * @Assert\NotBLank
     * @Assert\Regex("/[a-zA-Z ]+/")
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=200, nullable=false)
     * @Assert\NotBLank
     * @Assert\Regex("/[a-zA-Z ]+/")
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBLank
     * @Assert\Email(
     *      message = "El email '{{ value }}' no es válido",
     *      checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     * @Assert\NotBLank
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    // para establecer las relaciones
    
    /**
    * @var \DateTime|null
    *
    * @ORM\OneToMany(targetEntity="App\Entity\Service", mappedBy="user")
    */
    private $services;

    // public function __construct()
    // {
    //     $this->services = new ArrayCollection();
    // }

    /**
    * @var \DateTime|null
    *
    * @ORM\OneToMany(targetEntity="App\Entity\Category", mappedBy="user")
    */
    private $categories;

    public function __construct()
    {
        $this->services = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection[Service]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    /**
     * @return Collection[Category]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }


    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        // haciendo un get conseguimos el role desde la DB si hubiera
        // return $this->getRole();

        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }
}