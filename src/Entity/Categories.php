<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use function PHPSTORM_META\type;

 #[ORM\Entity(repositoryClass: CategoriesRepository::class)]
 
 class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

   
    #[ORM\Column(type: 'string', length: 150)]
    private $name;

    #[Gedmo\Slug(fields:['name'])]
    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: Categories::class)]
    private $categories;

    #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Annonces::class)]
    private $annonces;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->annonces = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent):self
    {
        $this->parent = $parent;

        return $this;
    }


    /**
     * @return Collection<int, Categories>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setParent($this);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getParent() === $this) {
                $category->setParent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Annonces>
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonces $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setCategories($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonces $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getCategories() === $this) {
                $annonce->setCategories(null);
            }
        }

        return $this;
    }

}
