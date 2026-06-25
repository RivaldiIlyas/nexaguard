<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon' => 'required|max:255',
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect('/admin/services')
            ->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon' => 'required|max:255',
        ]);

        $service = Service::findOrFail($id);

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect('/admin/services')
            ->with('success', 'Service berhasil diupdate.');
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        return redirect('/admin/services')
            ->with('success', 'Service berhasil dihapus.');
    }
}