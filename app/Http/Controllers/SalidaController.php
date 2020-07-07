<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSalidaRequest;
use App\Http\Requests\UpdateSalidaRequest;
use App\Repositories\SalidaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SalidaController extends AppBaseController
{
    /** @var  SalidaRepository */
    private $salidaRepository;

    public function __construct(SalidaRepository $salidaRepo)
    {
        $this->salidaRepository = $salidaRepo;
    }

    /**
     * Display a listing of the Salida.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $salidas = $this->salidaRepository->all();

        return view('salidas.index')
            ->with('salidas', $salidas);
    }

    /**
     * Show the form for creating a new Salida.
     *
     * @return Response
     */
    public function create()
    {
        return view('salidas.create');
    }

    /**
     * Store a newly created Salida in storage.
     *
     * @param CreateSalidaRequest $request
     *
     * @return Response
     */
    public function store(CreateSalidaRequest $request)
    {
        $input = $request->all();

        $salida = $this->salidaRepository->create($input);

        Flash::success('Salida saved successfully.');

        return redirect(route('salidas.index'));
    }

    /**
     * Display the specified Salida.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        return view('salidas.show')->with('salida', $salida);
    }

    /**
     * Show the form for editing the specified Salida.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        return view('salidas.edit')->with('salida', $salida);
    }

    /**
     * Update the specified Salida in storage.
     *
     * @param int $id
     * @param UpdateSalidaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalidaRequest $request)
    {
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        $salida = $this->salidaRepository->update($request->all(), $id);

        Flash::success('Salida updated successfully.');

        return redirect(route('salidas.index'));
    }

    /**
     * Remove the specified Salida from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $salida = $this->salidaRepository->find($id);

        if (empty($salida)) {
            Flash::error('Salida not found');

            return redirect(route('salidas.index'));
        }

        $this->salidaRepository->delete($id);

        Flash::success('Salida deleted successfully.');

        return redirect(route('salidas.index'));
    }
}
