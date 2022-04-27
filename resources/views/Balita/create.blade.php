@extends('layouts.dashboard.app')

@section('title', 'New Balita')

@section('content')
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">New Balita</div>
    <form action="{{ route('lansia.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-control">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </div>
      <div class="form-group">
        <label for="usia">Usia</label>
        <input type="number" name="usia" id="usia" class="form-control">
      </div>
      <div class="form-group">
        <label for="bb">Berat Badan</label>
        <input type="number" name="bb" id="bb" class="form-control">
      </div>
      <div class="form-group">
        <label for="tinggi">Tinggi</label>
        <input type="text" name="tinggi" id="tinggi" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
