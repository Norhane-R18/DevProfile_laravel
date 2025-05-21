<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
        ]);

        auth()->user()->Projects()->create($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet ajouté');
    }

    public function edit(Project $project)
    {
        // Check if the project belongs to the authenticated user
        $this->authorize('update', $project);
        
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour');
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet supprimé');
    }
}