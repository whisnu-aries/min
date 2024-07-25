<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Client;
use App\Models\Project;
use App\Models\ProjectAssets;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['services'] = Service::all();
        $data['clients'] = Client::all();

        return view('pages.projects.form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        $client = Client::where('uuid', $data['client'])->first(); 
        $service = Service::where('uuid', $data['service'])->first(); 

        $project_data['uuid'] = Str::uuid();
        $project_data['client_id'] = $client->id;
        $project_data['service_id'] = $service->id;
        $project_data['name'] = $data['name'];
        $project_data['description'] = $data['description'];

        $project = Project::create($project_data);

        if ($request->file('assets')) {
            $filePath = public_path('projects');
            
            foreach ($data['assets'] as $asset) {
                $file = $asset;
                $fileName = time() . $file->getClientOriginalName();
                
                $file->move($filePath, $fileName);
                
                $project_asset_data['uuid'] = Str::uuid();
                $project_asset_data['project_id'] = $project->id;
                $project_asset_data['link'] = $fileName;
                ProjectAssets::create($project_asset_data);
            }
        }

        return redirect()->route('project.index')->with('success', 'Project created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data['services'] = Service::all();
        $data['clients'] = Client::all();
        $data['project'] = $project;

        return view('pages.projects.form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $validated = $request->validated();
        $client = Client::where('uuid', $validated['client'])->first(); 
        $service = Service::where('uuid', $validated['service'])->first(); 
        
        $project->fill($validated);
        $project->client_id = $client->id;
        $project->service_id = $service->id;

        $project->save();

        if ($request->file('assets')) {
            $filePath = public_path('projects');
            
            foreach ($validated['assets'] as $asset) {
                $file = $asset;
                $fileName = time() . $file->getClientOriginalName();
                
                $file->move($filePath, $fileName);
                
                $project_asset_data['uuid'] = Str::uuid();
                $project_asset_data['project_id'] = $project->id;
                $project_asset_data['link'] = $fileName;
                ProjectAssets::create($project_asset_data);
            }
        }

        return redirect()->route('project.index')->with('success', 'Project created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_storage(String $asset_uuid)
    {
        $asset = ProjectAssets::where('uuid', $asset_uuid)->first();
        $project = $asset->project;
        $asset->delete();
        return redirect()->route('project.edit', $project->uuid)->with('success', 'Project asset deleted successfully!');
    }
}
