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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url|max:255',
        ]);

        auth()->user()->projects()->create($validated);

        return redirect()->route('projects.index')
            ->with('success', 'Projet créé avec succès.');
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'nullable|url|max:255',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')
            ->with('success', 'Projet modifié avec succès.');
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Projet supprimé avec succès.');
    }
}