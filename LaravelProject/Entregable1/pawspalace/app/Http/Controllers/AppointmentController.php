<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Consultas';
        $viewData['subtitle'] = 'consultas';
        $viewData['appointments'] = Appointment::all();

        return view('appointment.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Agendar consulta';

        return view('appointment.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View|RedirectResponse
    {

        Appointment::validate($request);

        Appointment::create($request->only(['duration', 'reason', 'status', 'modality', 'price']));

        return view('appointment.created');
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];
        $appointment = Appointment::find($id);

        if (! $appointment) {
            return redirect()->redirect('home.index');
        }

        $viewData['title'] = ' Tienda de mascotas';
        $viewData['subtitle'] = $appointment->getId().' - Detalles de consulta';
        $viewData['appointment'] = $appointment;

        return view('appointment.show')->with('viewData', $viewData);
    }

    public function delete(string $id): RedirectResponse
    {
        $appointment = Appointment::find($id);

        $appointment->delete();

        return redirect()->route('appointment.index');
    }
}
