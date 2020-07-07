<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisitaRequest;
use App\Http\Requests\UpdateVisitaRequest;
use App\Repositories\VisitaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VisitaController extends AppBaseController
{
    /** @var  VisitaRepository */
    private $visitaRepository;

    public function __construct(VisitaRepository $visitaRepo)
    {
        $this->visitaRepository = $visitaRepo;
    }

    /**
     * Display a listing of the Visita.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $visitas = $this->visitaRepository->all();

        return view('visitas.index')
            ->with('visitas', $visitas);
    }

    /**
     * Show the form for creating a new Visita.
     *
     * @return Response
     */
    public function create()
    {
        return view('visitas.create');
    }

    /**
     * Store a newly created Visita in storage.
     *
     * @param CreateVisitaRequest $request
     *
     * @return Response
     */
    public function store(CreateVisitaRequest $request)
    {
        $input = $request->all();

        $visita = $this->visitaRepository->create($input);

        Flash::success('Visita saved successfully.');

        return redirect(route('visitas.index'));
    }

    /**
     * Display the specified Visita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            Flash::error('Visita not found');

            return redirect(route('visitas.index'));
        }

        return view('visitas.show')->with('visita', $visita);
    }

    /**
     * Show the form for editing the specified Visita.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            Flash::error('Visita not found');

            return redirect(route('visitas.index'));
        }

        return view('visitas.edit')->with('visita', $visita);
    }

    /**
     * Update the specified Visita in storage.
     *
     * @param int $id
     * @param UpdateVisitaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisitaRequest $request)
    {
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            Flash::error('Visita not found');

            return redirect(route('visitas.index'));
        }

        $visita = $this->visitaRepository->update($request->all(), $id);

        Flash::success('Visita updated successfully.');

        return redirect(route('visitas.index'));
    }

    /**
     * Remove the specified Visita from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visita = $this->visitaRepository->find($id);

        if (empty($visita)) {
            Flash::error('Visita not found');

            return redirect(route('visitas.index'));
        }

        $this->visitaRepository->delete($id);

        Flash::success('Visita deleted successfully.');

        return redirect(route('visitas.index'));
    }
}
