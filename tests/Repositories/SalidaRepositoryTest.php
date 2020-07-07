<?php namespace Tests\Repositories;

use App\Models\Salida;
use App\Repositories\SalidaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class SalidaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var SalidaRepository
     */
    protected $salidaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->salidaRepo = \App::make(SalidaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_salida()
    {
        $salida = factory(Salida::class)->make()->toArray();

        $createdSalida = $this->salidaRepo->create($salida);

        $createdSalida = $createdSalida->toArray();
        $this->assertArrayHasKey('id', $createdSalida);
        $this->assertNotNull($createdSalida['id'], 'Created Salida must have id specified');
        $this->assertNotNull(Salida::find($createdSalida['id']), 'Salida with given id must be in DB');
        $this->assertModelData($salida, $createdSalida);
    }

    /**
     * @test read
     */
    public function test_read_salida()
    {
        $salida = factory(Salida::class)->create();

        $dbSalida = $this->salidaRepo->find($salida->id);

        $dbSalida = $dbSalida->toArray();
        $this->assertModelData($salida->toArray(), $dbSalida);
    }

    /**
     * @test update
     */
    public function test_update_salida()
    {
        $salida = factory(Salida::class)->create();
        $fakeSalida = factory(Salida::class)->make()->toArray();

        $updatedSalida = $this->salidaRepo->update($fakeSalida, $salida->id);

        $this->assertModelData($fakeSalida, $updatedSalida->toArray());
        $dbSalida = $this->salidaRepo->find($salida->id);
        $this->assertModelData($fakeSalida, $dbSalida->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_salida()
    {
        $salida = factory(Salida::class)->create();

        $resp = $this->salidaRepo->delete($salida->id);

        $this->assertTrue($resp);
        $this->assertNull(Salida::find($salida->id), 'Salida should not exist in DB');
    }
}
