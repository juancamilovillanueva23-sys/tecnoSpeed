<?php

return [
    'users' => [
        'primary_key' => 'id',
        'foreign_keys' => [],
    ],
    'teams' => [
        'primary_key' => 'id',
        'foreign_keys' => [],
    ],
    'team_members' => [
        'primary_key' => 'id',
        'foreign_keys' => [
            'team_id' => 'teams.id',
            'user_id' => 'users.id',
        ],
    ],
    'team_invitations' => [
        'primary_key' => 'id',
        'foreign_keys' => [
            'team_id' => 'teams.id',
            'invited_by' => 'users.id',
        ],
    ],
    'passkeys' => [
        'primary_key' => 'id',
        'foreign_keys' => [
            'user_id' => 'users.id',
        ],
    ],
    'sessions' => [
        'primary_key' => 'id',
        'foreign_keys' => [
            'user_id' => 'users.id',
        ],
    ],
    'categoria' => [
        'primary_key' => 'id_ categoria',
        'foreign_keys' => [],
    ],
    'stock' => [
        'primary_key' => 'id_stock',
        'foreign_keys' => [],
    ],
    'producto' => [
        'primary_key' => 'id_producto',
        'foreign_keys' => [
            'id__stock' => 'stock.id_stock',
        ],
    ],
    'descuento' => [
        'primary_key' => 'Id_descuento',
        'foreign_keys' => [
            'Cantidad descuento' => 'producto.id_producto',
        ],
    ],
    'cupon' => [
        'primary_key' => 'id_cupon',
        'foreign_keys' => [
            'id_users' => 'users.num_doc',
            'num_doc' => 'users.num_doc',
        ],
    ],
    'pedidos' => [
        'primary_key' => 'id_pedidos',
        'foreign_keys' => [
            'id_users' => 'users.num_doc',
        ],
    ],
    'pedido_producto' => [
        'primary_key' => 'id_pedido_producto',
        'foreign_keys' => [
            'id_pedido_producto' => 'pedidos.id_pedidos',
            'id_producto' => 'producto.id_producto',
        ],
    ],
    'transportadora' => [
        'primary_key' => 'id_transportadora',
        'foreign_keys' => [],
    ],
    'costo_envio' => [
        'primary_key' => 'id_costo_env',
        'foreign_keys' => [],
    ],
    'envio' => [
        'primary_key' => 'id_envio',
        'foreign_keys' => [
            'id_envio' => 'pedidos.id_envio',
            'id_costo_envio' => 'costo_envio.id_costo_env',
        ],
    ],
    'pago' => [
        'primary_key' => 'id_pago',
        'foreign_keys' => [],
    ],
    'metodo_pago' => [
        'primary_key' => 'id_metodo_pago',
        'foreign_keys' => [
            'id_users' => 'users.num_doc',
            'id_pago' => 'pago.id_pago',
        ],
    ],
    'factura' => [
        'primary_key' => 'id_factura',
        'foreign_keys' => [],
    ],
    'detalle_factura' => [
        'primary_key' => 'id_deta_fac',
        'foreign_keys' => [
            'id_factura' => 'factura.id_factura',
        ],
    ],
    'reseña' => [
        'primary_key' => 'id_reseña',
        'foreign_keys' => [],
    ],
    'carrito_compras' => [
        'primary_key' => 'id_carrito',
        'foreign_keys' => [],
    ],
];
