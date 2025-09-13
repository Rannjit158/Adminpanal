@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="grid grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">Users</div>
    <div class="bg-white p-6 rounded shadow">Reports</div>
    <div class="bg-white p-6 rounded shadow">Settings</div>
  </div>
@endsection
