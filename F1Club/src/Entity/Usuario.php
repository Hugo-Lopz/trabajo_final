<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Ya existe una cuenta con este correo')]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(nullable: true)]
    private ?int $codigo_postal = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $calle = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 70)]
    private ?string $nombre = null;

    #[ORM\Column(length: 100)]
    private ?string $apellidos = null;

    #[ORM\Column (nullable: true)]
    private ?int $dinero_gastado = null;

    #[ORM\Column (nullable: true)]
    private ?\DateTimeImmutable $fecha_de_creacion = null;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Pedido::class, orphanRemoval: true)]
    private Collection $pedidos;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Valoracion::class, orphanRemoval: true)]
    private Collection $valoraciones;

    #[ORM\ManyToMany(targetEntity: Cupon::class, mappedBy: 'usuario')]
    private Collection $cupones;

    #[ORM\OneToOne(inversedBy: 'usuario', cascade: ['persist', 'remove'])]
    private ?ListaDeseos $lista_deseos = null;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Mensaje::class)]
    private Collection $mensajes;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Participante::class)]
    private Collection $participantes;

    #[ORM\OneToMany(mappedBy: 'usuarios', targetEntity: Posts::class, orphanRemoval: true)]
    private Collection $posts;

    public function __construct()
    {
        $this->pedidos = new ArrayCollection();
        $this->valoraciones = new ArrayCollection();
        $this->cupones = new ArrayCollection();
        $this->mensajes = new ArrayCollection();
        $this->participantes = new ArrayCollection();
        $this->posts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getCodigoPostal(): ?int
    {
        return $this->codigo_postal;
    }

    public function setCodigoPostal(?int $codigo_postal): static
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): static
    {
        $this->calle = $calle;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(?string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getDineroGastado(): ?int
    {
        return $this->dinero_gastado;
    }

    public function setDineroGastado(int $dinero_gastado): static
    {
        $this->dinero_gastado = $dinero_gastado;

        return $this;
    }

    public function getFechaDeCreacion(): ?\DateTimeInterface
    {
        return $this->fecha_de_creacion;
    }

    public function setFechaDeCreación(\DateTimeInterface $fecha_de_creacion): static
    {
        $this->fecha_de_creacion = $fecha_de_creacion;

        return $this;
    }

    /**
     * @return Collection<int, Pedido>
     */
    public function getPedidos(): Collection
    {
        return $this->pedidos;
    }

    public function addPedido(Pedido $pedido): static
    {
        if (!$this->pedidos->contains($pedido)) {
            $this->pedidos->add($pedido);
            $pedido->setUsuario($this);
        }

        return $this;
    }

    public function removePedido(Pedido $pedido): static
    {
        if ($this->pedidos->removeElement($pedido)) {
            // set the owning side to null (unless already changed)
            if ($pedido->getUsuario() === $this) {
                $pedido->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Valoracion>
     */
    public function getValoraciones(): Collection
    {
        return $this->valoraciones;
    }

    public function addValoracion(Valoracion $valoracion): static
    {
        if (!$this->valoraciones->contains($valoracion)) {
            $this->valoraciones->add($valoracion);
            $valoracion->setUsuario($this);
        }

        return $this;
    }

    public function removeValoracion(Valoracion $valoracion): static
    {
        if ($this->valoraciones->removeElement($valoracion)) {
            // set the owning side to null (unless already changed)
            if ($valoracion->getUsuario() === $this) {
                $valoracion->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cupon>
     */
    public function getCupones(): Collection
    {
        return $this->cupones;
    }

    public function addCupon(Cupon $cupon): static
    {
        if (!$this->cupones->contains($cupon)) {
            $this->cupones->add($cupon);
            $cupon->addUsuario($this);
        }

        return $this;
    }

    public function removeCupon(Cupon $cupon): static
    {
        if ($this->cupones->removeElement($cupon)) {
            $cupon->removeUsuario($this);
        }

        return $this;
    }

    public function getListaDeseos(): ?ListaDeseos
    {
        return $this->lista_deseos;
    }

    public function setListaDeseos(?ListaDeseos $lista_deseos): static
    {
        $this->lista_deseos = $lista_deseos;

        return $this;
    }

    /**
     * @return Collection<int, Mensaje>
     */
    public function getMensajes(): Collection
    {
        return $this->mensajes;
    }

    public function addMensaje(Mensaje $mensaje): static
    {
        if (!$this->mensajes->contains($mensaje)) {
            $this->mensajes->add($mensaje);
            $mensaje->setUsuario($this);
        }

        return $this;
    }

    public function removeMensaje(Mensaje $mensaje): static
    {
        if ($this->mensajes->removeElement($mensaje)) {
            // set the owning side to null (unless already changed)
            if ($mensaje->getUsuario() === $this) {
                $mensaje->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Participante>
     */
    public function getParticipantes(): Collection
    {
        return $this->participantes;
    }

    public function addParticipante(Participante $participante): static
    {
        if (!$this->participantes->contains($participante)) {
            $this->participantes->add($participante);
            $participante->setUsuario($this);
        }

        return $this;
    }

    public function removeParticipante(Participante $participante): static
    {
        if ($this->participantes->removeElement($participante)) {
            // set the owning side to null (unless already changed)
            if ($participante->getUsuario() === $this) {
                $participante->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Posts>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Posts $post): static
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setUsuarios($this);
        }

        return $this;
    }

    public function removePost(Posts $post): static
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getUsuarios() === $this) {
                $post->setUsuarios(null);
            }
        }

        return $this;
    }
}
