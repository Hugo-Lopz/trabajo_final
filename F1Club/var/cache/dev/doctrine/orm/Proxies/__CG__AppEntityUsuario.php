<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \App\Entity\Usuario implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'apellidos' => [parent::class, 'apellidos', null],
        "\0".parent::class."\0".'calle' => [parent::class, 'calle', null],
        "\0".parent::class."\0".'ciudad' => [parent::class, 'ciudad', null],
        "\0".parent::class."\0".'codigo_postal' => [parent::class, 'codigo_postal', null],
        "\0".parent::class."\0".'dinero_gastado' => [parent::class, 'dinero_gastado', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'fecha_de_creacion' => [parent::class, 'fecha_de_creacion', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'lista_deseos' => [parent::class, 'lista_deseos', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'pedidos' => [parent::class, 'pedidos', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'valoraciones' => [parent::class, 'valoraciones', null],
        'apellidos' => [parent::class, 'apellidos', null],
        'calle' => [parent::class, 'calle', null],
        'ciudad' => [parent::class, 'ciudad', null],
        'codigo_postal' => [parent::class, 'codigo_postal', null],
        'dinero_gastado' => [parent::class, 'dinero_gastado', null],
        'email' => [parent::class, 'email', null],
        'fecha_de_creacion' => [parent::class, 'fecha_de_creacion', null],
        'id' => [parent::class, 'id', null],
        'lista_deseos' => [parent::class, 'lista_deseos', null],
        'nombre' => [parent::class, 'nombre', null],
        'password' => [parent::class, 'password', null],
        'pedidos' => [parent::class, 'pedidos', null],
        'roles' => [parent::class, 'roles', null],
        'valoraciones' => [parent::class, 'valoraciones', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
