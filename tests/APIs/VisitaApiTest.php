<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Visita;

class VisitaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_visita()
    {
        $visita = factory(Visita::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/visitas', $visita
        );

        $this->assertApiResponse($visita);
    }

    /**
     * @test
     */
    public function test_read_visita()
    {
        $visita = factory(Visita::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/visitas/'.$visita->id
        );

        $this->assertApiResponse($visita->toArray());
    }

    /**
     * @test
     */
    public function test_update_visita()
    {
        $visita = factory(Visita::class)->create();
        $editedVisita = factory(Visita::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/visitas/'.$visita->id,
            $editedVisita
        );

        $this->assertApiResponse($editedVisita);
    }

    /**
     * @test
     */
    public function test_delete_visita()
    {
        $visita = factory(Visita::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/visitas/'.$visita->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/visitas/'.$visita->id
        );

        $this->response->assertStatus(404);
    }
}
