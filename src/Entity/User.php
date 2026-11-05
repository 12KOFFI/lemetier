<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cette adresse e-mail est déjà utilisée par un autre compte.')]
#[UniqueEntity(fields: ['contact'], message: 'Ce numéro de téléphone est déjà utilisé par un autre compte.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    // Facultatif pour les candidats : ils peuvent se connecter avec leur numéro de téléphone.
    #[ORM\Column(type: 'string', length: 180, unique: true, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'string')]
    private string $password;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isActive = true;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $lastLoginAt = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $prenoms = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $nomjeunefille = null;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private ?string $sexe = null;

    // Éligibilité « 18 à 40 ans » : 40 ans révolus acceptés jusqu'à la veille des 41 ans.
    #[ORM\Column(type: 'date', nullable: true)]
    #[Assert\NotNull(message: 'La date de naissance est requise', groups: ['candidat'])]
    #[Assert\LessThan('today', message: 'La date de naissance doit être dans le passé', groups: ['candidat'])]
    #[Assert\GreaterThan('-41 years', message: 'Le candidat doit avoir au plus 40 ans', groups: ['candidat'])]
    #[Assert\LessThanOrEqual('-18 years', message: 'Le candidat doit avoir au moins 18 ans', groups: ['candidat'])]
    private ?\DateTimeInterface $datenaissance = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $lieunaissance = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $residence = null;

    #[ORM\Column(type: 'string', length: 15, nullable: true)]
    private ?string $situationmat = null;

    // Identifiant de connexion possible : stocké normalisé (10 chiffres), donc unique.
    #[ORM\Column(type: 'string', length: 15, unique: true, nullable: true)]
    #[Assert\NotBlank(message: 'Le numéro de téléphone est requis', groups: ['candidat'])]
    #[Assert\Regex(pattern: '/^\d{10}$/', message: 'Le numéro de téléphone doit comporter 10 chiffres (ex. 07 08 11 42 59)', groups: ['candidat'])]
    private ?string $contact = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $numextrait = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    #[Assert\NotNull(message: 'La nationalité est requise', groups: ['candidat'])]
    #[Assert\Choice(choices: ['Ivoirienne', 'Ivoirien'], message: 'La nationalité doit être ivoirienne', groups: ['candidat'])]
    private ?string $nationalite = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $nompere = null;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private ?string $nommere = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $email = $email !== null ? trim($email) : null;
        $this->email = $email !== '' ? $email : null;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) ($this->email ?? $this->contact);
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenoms(): ?string
    {
        return $this->prenoms;
    }

    public function setPrenoms(?string $prenoms): self
    {
        $this->prenoms = $prenoms;
        return $this;
    }

    public function getNomjeunefille(): ?string
    {
        return $this->nomjeunefille;
    }

    public function setNomjeunefille(?string $nomjeunefille): self
    {
        $this->nomjeunefille = $nomjeunefille;
        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;
        return $this;
    }

    public function getLieunaissance(): ?string
    {
        return $this->lieunaissance;
    }

    public function setLieunaissance(?string $lieunaissance): self
    {
        $this->lieunaissance = $lieunaissance;
        return $this;
    }

    public function getResidence(): ?string
    {
        return $this->residence;
    }

    public function setResidence(?string $residence): self
    {
        $this->residence = $residence;
        return $this;
    }

    public function getSituationmat(): ?string
    {
        return $this->situationmat;
    }

    public function setSituationmat(?string $situationmat): self
    {
        $this->situationmat = $situationmat;
        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(?string $contact): self
    {
        $this->contact = UserRepository::normalizePhone($contact);
        return $this;
    }

    public function getNumextrait(): ?string
    {
        return $this->numextrait;
    }

    public function setNumextrait(?string $numextrait): self
    {
        $this->numextrait = $numextrait;
        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(?string $nationalite): self
    {
        $this->nationalite = $nationalite;
        return $this;
    }

    public function getNompere(): ?string
    {
        return $this->nompere;
    }

    public function setNompere(?string $nompere): self
    {
        $this->nompere = $nompere;
        return $this;
    }

    public function getNommere(): ?string
    {
        return $this->nommere;
    }

    public function setNommere(?string $nommere): self
    {
        $this->nommere = $nommere;
        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeImmutable $lastLoginAt): self
    {
        $this->lastLoginAt = $lastLoginAt;
        return $this;
    }
}
