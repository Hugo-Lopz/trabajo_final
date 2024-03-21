<?php

namespace App\Module;

class ProductoImagenModule {

    public function getProductosImagen(array $productos)
    {
        $productosConImagen = [];
        foreach ($productos as $producto) {
            //Obtener las imágenes asociadas a cada producto
            $imagenes = $producto->getImagenes();

            //La primera foto que encontremos en la base de datos siempre será la princial
            $imagenPrincipal = $imagenes[0];

            $productosConImagen[] = [
                'producto' => $producto,
                'imagen' => $imagenPrincipal
            ];
        }

        return $productosConImagen;
    }
}