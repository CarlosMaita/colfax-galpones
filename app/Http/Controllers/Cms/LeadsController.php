<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;
class LeadsController extends Controller
{
    public function index()
    {
    	$leads = Lead::where('status', 0)->paginate(20);
    	$secName = 'leads';

    	return view('cms.leads.index', compact('leads', 'secName'));
    }

    public function agregarLead(Request $request)
    {
        $lead = Lead::create($request->all());

        return back()->with('message', 'Mensaje enviado!');
    }

    public function archivarLeads($id)
    {
    	$lead = Lead::findOrFail($id);
    	$lead->update([
    		'status' => 1,
    	]);

    	return back()->with('message', 'Lead Archivado con éxito!');
    }


    public function obtenerComentario($id)
    {
        $lead = Lead::find($id);
        return response()->json($lead, 200);
    }
}
