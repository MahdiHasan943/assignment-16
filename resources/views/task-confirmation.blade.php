@extends('layouts.app')

@section('content')
<style>
    .confirmation-wrapper {
        max-width: 500px;
        margin: 80px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border: 1px solid #eee;
        font-family: Arial, sans-serif;
        color: #333;
    }

    .confirmation-wrapper h2 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 25px;
        color: #2a7739; /* green */
    }

    .confirmation-wrapper strong {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .confirmation-wrapper p {
        margin-left: 8px;
        white-space: pre-wrap;
    }

    .confirmation-wrapper a {
        display: inline-block;
        margin-top: 25px;
        color: #1f80e0;
        font-weight: 600;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .confirmation-wrapper a:hover {
        color: #1269be;
        text-decoration: underline;
    }
</style>

<div class="confirmation-wrapper">
    <h2>✅ Task Submitted Successfully!</h2>

    <div>
        <strong>Title:</strong>
        <p>{{ $data['title'] }}</p>
    </div>

    <div>
        <strong>Description:</strong>
        <p>{{ $data['description'] }}</p>
    </div>

    <a href="{{ route('task.form') }}">← Submit another task</a>
</div>
@endsection
