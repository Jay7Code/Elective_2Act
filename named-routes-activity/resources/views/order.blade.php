@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header"><h1>Order View</h1></div>
  <div class="card-body">
    <form>
      <div class="mb-3">
        <label class="form-label">Order Number</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Order Date</label>
        <input type="date" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection