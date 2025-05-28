@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ $title }}</h1>
        </div>
        <div class="card-body">
            <p>The following parameters were captured from the URL:</p>
            <form>
                @foreach ($data as $label => $value)
                    <div class="mb-3">
                        <label class="form-label"><b>{{ $label }}</b></label>
                        <input type="text" class="form-control" value="{{ $value }}" readonly>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection