<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/conversaciones' => [[['_route' => 'getConversaciones', '_controller' => 'App\\Controller\\ConversacionController::obtenerConversaciones'], null, null, null, false, false, null]],
        '/manager/home' => [[['_route' => 'manager_home', '_controller' => 'App\\Controller\\Manager\\ManagerController::mostrarHomeManager'], null, null, null, false, false, null]],
        '/manager/productosMasVendidos' => [[['_route' => 'mostrar_mas_vendidos_este_mes', '_controller' => 'App\\Controller\\Manager\\ManagerController::mostrarTop10ProductosMasVendidosEsteMes'], null, null, null, false, false, null]],
        '/manager/pedidosDiariosMesActual' => [[['_route' => 'mostrar_pedidos_diarios_del_mes_actual', '_controller' => 'App\\Controller\\Manager\\ManagerController::pedidosDiariosDelMesActual'], null, null, null, false, false, null]],
        '/manager/ventasFabricantesEsteMes' => [[['_route' => 'mostrar_ventas_fabricantes_mes_actual', '_controller' => 'App\\Controller\\Manager\\ManagerController::ventasFabricantesMesActual'], null, null, null, false, false, null]],
        '/carrito' => [[['_route' => 'mostrar_carrito', '_controller' => 'App\\Controller\\Shop\\CarritoController::mostrarCarrito'], null, null, null, false, false, null]],
        '/pagar' => [[['_route' => 'pagina_de_pago', '_controller' => 'App\\Controller\\Shop\\CompraController::pagar'], null, null, null, false, false, null]],
        '/compra' => [[['_route' => 'procesar_compra', '_controller' => 'App\\Controller\\Shop\\CompraController::comprarProductos'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\Shop\\HomeController::home'], null, null, null, false, false, null]],
        '/lista_deseos' => [[['_route' => 'acceder_lista_deseos', '_controller' => 'App\\Controller\\Shop\\ListaDeseosController::accederAListaDeseos'], null, null, null, false, false, null]],
        '/busqueda' => [[['_route' => 'busqueda_producto', '_controller' => 'App\\Controller\\Shop\\ProductoController::buscarProducto'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\User\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\User\\LoginController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\User\\RegistrationController::register'], null, null, null, false, false, null]],
        '/usuario/ver_pedidos' => [[['_route' => 'usuario_vista_pedidos', '_controller' => 'App\\Controller\\User\\UsuarioController::verPedidos'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|onversacion/([^/]++)(*:67)'
                    .'|arrito/(?'
                        .'|add/([^/]++)(*:96)'
                        .'|delete/([^/]++)(*:118)'
                    .')'
                .')'
                .'|/mensajes/(?'
                    .'|([^/]++)(*:149)'
                    .'|nuevo/([^/]++)(*:171)'
                .')'
                .'|/fabricante/([^/]++)(*:200)'
                .'|/e(?'
                    .'|quipo/([^/]++)(*:227)'
                    .'|scala/([^/]++)(*:249)'
                .')'
                .'|/lista_deseos/(?'
                    .'|add/([^/]++)(*:287)'
                    .'|remove/([^/]++)(*:310)'
                .')'
                .'|/producto/([^/]++)(*:337)'
                .'|/valorar/([^/]++)(*:362)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'app_conversacion', '_controller' => 'App\\Controller\\ConversacionController::crearConversaciones'], ['id'], null, null, false, true, null]],
        96 => [[['_route' => 'agregar_producto_al_carrito', '_controller' => 'App\\Controller\\Shop\\CarritoController::agregarProductoAlCarrito'], ['idProducto'], null, null, false, true, null]],
        118 => [[['_route' => 'quitar_producto_del_carrito', '_controller' => 'App\\Controller\\Shop\\CarritoController::quitarProductodelCarrito'], ['idProducto'], null, null, false, true, null]],
        149 => [[['_route' => 'getMensajes', '_controller' => 'App\\Controller\\MensajeController::obtenerMensajes'], ['id'], null, null, false, true, null]],
        171 => [[['_route' => 'nuevoMensaje', '_controller' => 'App\\Controller\\MensajeController::nuevoMensaje'], ['id'], null, null, false, true, null]],
        200 => [[['_route' => 'seleccion_fabricante', '_controller' => 'App\\Controller\\Shop\\CategoriaController::catalogoFabricantes'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'seleccion_equipo', '_controller' => 'App\\Controller\\Shop\\CategoriaController::catalogoEquipos'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'seleccion_escala', '_controller' => 'App\\Controller\\Shop\\CategoriaController::catalogoEscalas'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'agregar_producto_a_lista_deseos', '_controller' => 'App\\Controller\\Shop\\ListaDeseosController::agregarProductoAListaDeseos'], ['idProducto'], null, null, false, true, null]],
        310 => [[['_route' => 'eliminar_producto_de_lista_deseos', '_controller' => 'App\\Controller\\Shop\\ListaDeseosController::eliminarProductoAListaDeseos'], ['idProducto'], null, null, false, true, null]],
        337 => [[['_route' => 'ver_producto', '_controller' => 'App\\Controller\\Shop\\ProductoController::visualizarProducto'], ['id'], null, null, false, true, null]],
        362 => [
            [['_route' => 'valoracion_producto', '_controller' => 'App\\Controller\\Shop\\ProductoController::valorarProducto'], ['idProducto'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
