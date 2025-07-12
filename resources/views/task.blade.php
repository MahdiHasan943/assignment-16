@extends('layouts.app')

@section('content')
<style>
    .task-wrapper {
        max-width: 500px;
        margin: 80px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border: 1px solid #eee;
        font-family: Arial, sans-serif;
    }

    .task-wrapper h2 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .task-wrapper label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #333;
    }

    .task-wrapper input,
    .task-wrapper textarea {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
    }

    .task-wrapper button {
        width: 100%;
        background: #1f80e0;
        color: white;
        font-weight: bold;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .task-wrapper button:hover {
        background: #1269be;
    }

    .task-wrapper .success {
        background: #e6fbe8;
        color: #2a7739;
        border: 1px solid #b5e7be;
        padding: 10px 12px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
</style>

<div class="task-wrapper">
    <h2>📝 Create a New Task</h2>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('task.submit') }}">
        @csrf

        <label for="title">Task Title</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Task Description</label>
        <textarea name="description" id="description" rows="4" required></textarea>

        <button type="submit">🚀 Submit Task</button>
    </form>
</div>
@endsection
