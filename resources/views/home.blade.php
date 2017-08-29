@extends('template')
@section('title', 'HotsApi')

@section('head')
    <style>
        .main-text {
            padding: 3rem 1.5rem;
            text-align: center;
        }
        .main-text > div {
            text-align: center;
            max-width: 600px;
            margin:auto;
        }
    </style>
@endsection

@section('content')

    <div class="main-text">
        <div align="center">
            <h1>Welcome to HotsApi</h1>
            <h4>HotsApi an open Heroes of the Storm replay database where everyone can download replays</h4>
            <p>
                We want all developers to have access to large community replay database. Whether you want to continuously pull
                new replays from our database, or download them all once, or just query their metadata.
            </p>
        </div>
    </div>

@endsection
