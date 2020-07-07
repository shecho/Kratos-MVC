<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVisitaAPIRequest;
use App\Http\Requests\API\UpdateVisitaAPIRequest;
use App\Models\Visita;
use App\Repositories\VisitaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class VisitaController
 * @package App\Http\Controllers\API
 */

class VisitaAPIController extends AppBaseController
{
    /** @var  VisitaRepository */
    private $visitaRepository;

    public function __construct(VisitaRepository $visitaRepo)
    {
        $this->visitaRepository = $visitaRepo;
    }

    /**
     * Display a listing of the Visita.
     * GET|HEAD /visitas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $visitas = $this->visitaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($visitas->toArray(), 'Visitas retrieved successfully');
    }

    /**
     * Store a newly created Visita in storage.
     * POST /visitas
     *
     * @param CreateVisitaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVisitaAPIRequest $request)
    {
        $input = $request->all();

        $visita = $this->visitaRepository->create($input);

        return $this->sendResponse($visita->toArray(), 'Visita saved successfully');
    }

    /**
     * Display the specified Visita.
     * GET|HEAD /visitas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Visita $visita */
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            return $this->sendError('Visita not found');
        }

        return $this->sendResponse($visita->toArray(), 'Visita retrieved successfully');
    }

    /**
     * Update the specified Visita in storage.
     * PUT/PATCH /visitas/{id}
     *
     * @param int $id
     * @param UpdateVisitaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisitaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Visita $visita */
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            return $this->sendError('Visita not found');
        }

        $visita = $this->visitaRepository->update($input, $id);

        return $this->sendResponse($visita->toArray(), 'Visita updated successfully');
    }

    /**
     * Remove the specified Visita from storage.
     * DELETE /visitas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Visita $visita */
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            return $this->sendError('Visita not found');
        }

        $visita->delete();

        return $this->sendSuccess('Visita deleted successfully');
    }
}
