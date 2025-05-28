@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header"><h1>Order Details View</h1></div>
  <div class="card-body">
    <form>
      <div class="mb-3">
        <label class="form-label">Transaction ID</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection