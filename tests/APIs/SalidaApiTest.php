<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Salida;

class SalidaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_salida()
    {
        $salida = factory(Salida::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/salidas', $salida
        );

        $this->assertApiResponse($salida);
    }

    /**
     * @test
     */
    public function test_read_salida()
    {
        $salida = factory(Salida::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/salidas/'.$salida->id
        );

        $this->assertApiResponse($salida->toArray());
    }

    /**
     * @test
     */
    public function test_update_salida()
    {
        $salida = factory(Salida::class)->create();
        $editedSalida = factory(Salida::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/salidas/'.$salida->id,
            $editedSalida
        );

        $this->assertApiResponse($editedSalida);
    }

    /**
     * @test
     */
    public function test_delete_salida()
    {
        $salida = factory(Salida::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/salidas/'.$salida->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/salidas/'.$salida->id
        );

        $this->response->assertStatus(404);
    }
}
