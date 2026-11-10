<?php

namespace Tests\Feature;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ProductoFiltrosTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Schema::dropIfExists('producto');
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id_producto')->primary();
            $table->integer('id__stock');
            $table->string('nombre_pro');
            $table->text('descripcion');
            $table->decimal('valor_pro', 8, 2);
            $table->integer('marca');
            $table->string('id_imagen');
            $table->integer('id_categoria');
            $table->integer('id_cupon');
        });

        DB::table('producto')->insert([
            $this->producto(1001, 'Samsung Catalog audifono', 50000, 101),
            $this->producto(2001, 'Samsung Catalog celular', 50000, 101),
            $this->producto(2002, 'Samsung Catalog costoso', 150000, 101),
            $this->producto(2003, 'Apple Catalog celular', 40000, 102),
            $this->producto(3001, 'Samsung Catalog accesorio', 50000, 101),
            $this->producto(4001, 'Samsung Catalog parlante', 50000, 101),
            $this->producto(5001, 'Samsung Catalog cargador', 50000, 101),
        ]);
    }

    public function test_category_filters_apply_search_brand_price_and_order(): void
    {
        $response = $this->get('/celulares?buscar=Catalog&marca=Samsung&precio_max=100000&orden=precio_desc');

        $response->assertOk()
            ->assertSee('Samsung Catalog celular')
            ->assertDontSee('Samsung Catalog costoso')
            ->assertDontSee('Apple Catalog celular')
            ->assertDontSee('Samsung Catalog audifono');
    }

    public function test_all_category_pages_keep_their_own_products_when_filtered(): void
    {
        $categories = [
            '/audifono' => 'Samsung Catalog audifono',
            '/celulares' => 'Samsung Catalog celular',
            '/accesorio' => 'Samsung Catalog accesorio',
            '/parlante' => 'Samsung Catalog parlante',
            '/cargador' => 'Samsung Catalog cargador',
        ];

        foreach ($categories as $path => $productName) {
            $this->get($path.'?buscar=Catalog&marca=Samsung&precio_max=100000&orden=precio_asc')
                ->assertOk()
                ->assertSee($productName);
        }
    }

    private function producto(int $id, string $nombre, int $precio, int $marca): array
    {
        return [
            'id_producto' => $id,
            'id__stock' => 1,
            'nombre_pro' => $nombre,
            'descripcion' => 'Producto de prueba',
            'valor_pro' => $precio,
            'marca' => $marca,
            'id_imagen' => 'storage/img/1.jpg',
            'id_categoria' => 1,
            'id_cupon' => 1,
        ];
    }
}
