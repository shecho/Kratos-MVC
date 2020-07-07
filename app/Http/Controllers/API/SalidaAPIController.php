<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSalidaAPIRequest;
use App\Http\Requests\API\UpdateSalidaAPIRequest;
use App\Models\Salida;
use App\Repositories\SalidaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SalidaController
 * @package App\Http\Controllers\API
 */

class SalidaAPIController extends AppBaseController
{
    /** @var  SalidaRepository */
    private $salidaRepository;

    public function __construct(SalidaRepository $salidaRepo)
    {
        $this->salidaRepository = $salidaRepo;
    }

    /**
     * Display a listing of the Salida.
     * GET|HEAD /salidas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $salidas = $this->salidaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($salidas->toArray(), 'Salidas retrieved successfully');
    }

    /**
     * Store a newly created Salida in storage.
     * POST /salidas
     *
     * @param CreateSalidaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSalidaAPIRequest $request)
    {
        $input = $request->all();

        $salida = $this->salidaRepository->create($input);

        return $this->sendResponse($salida->toArray(), 'Salida saved successfully');
    }

    /**
     * Display the specified Salida.
     * GET|HEAD /salidas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Salida $salida */
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            return $this->sendError('Salida not found');
        }

        return $this->sendResponse($salida->toArray(), 'Salida retrieved successfully');
    }

    /**
     * Update the specified Salida in storage.
     * PUT/PATCH /salidas/{id}
     *
     * @param int $id
     * @param UpdateSalidaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalidaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Salida $salida */
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            return $this->sendError('Salida not found');
        }

        $salida = $this->salidaRepository->update($input, $id);

        return $this->sendResponse($salida->toArray(), 'Salida updated successfully');
    }

    /**
     * Remove the specified Salida from storage.
     * DELETE /salidas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Salida $salida */
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            return $this->sendError('Salida not found');
        }

        $salida->delete();

        return $this->sendSuccess('Salida deleted successfully');
    }
}
