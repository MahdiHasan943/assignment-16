<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function showForm()
    {
        return view('task');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Log::info('Task submitted:', $data);

        session()->flash('success', 'Task submitted successfully!');

        return redirect()->route('task.confirmation')->with('data', $data);
    }

    public function confirmation()
    {
        $data = session('data');
        if (!$data) {
            return redirect()->route('task.form');
        }

        return view('task-confirmation', compact('data'));
    }
}
