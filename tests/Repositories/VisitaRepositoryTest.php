<?php namespace Tests\Repositories;

use App\Models\Visita;
use App\Repositories\VisitaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class VisitaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var VisitaRepository
     */
    protected $visitaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->visitaRepo = \App::make(VisitaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_visita()
    {
        $visita = factory(Visita::class)->make()->toArray();

        $createdVisita = $this->visitaRepo->create($visita);

        $createdVisita = $createdVisita->toArray();
        $this->assertArrayHasKey('id', $createdVisita);
        $this->assertNotNull($createdVisita['id'], 'Created Visita must have id specified');
        $this->assertNotNull(Visita::find($createdVisita['id']), 'Visita with given id must be in DB');
        $this->assertModelData($visita, $createdVisita);
    }

    /**
     * @test read
     */
    public function test_read_visita()
    {
        $visita = factory(Visita::class)->create();

        $dbVisita = $this->visitaRepo->find($visita->id);

        $dbVisita = $dbVisita->toArray();
        $this->assertModelData($visita->toArray(), $dbVisita);
    }

    /**
     * @test update
     */
    public function test_update_visita()
    {
        $visita = factory(Visita::class)->create();
        $fakeVisita = factory(Visita::class)->make()->toArray();

        $updatedVisita = $this->visitaRepo->update($fakeVisita, $visita->id);

        $this->assertModelData($fakeVisita, $updatedVisita->toArray());
        $dbVisita = $this->visitaRepo->find($visita->id);
        $this->assertModelData($fakeVisita, $dbVisita->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_visita()
    {
        $visita = factory(Visita::class)->create();

        $resp = $this->visitaRepo->delete($visita->id);

        $this->assertTrue($resp);
        $this->assertNull(Visita::find($visita->id), 'Visita should not exist in DB');
    }
}
