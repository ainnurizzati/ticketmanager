@extends('layouts.app')

@section('title')

Create New Tickets | Dutarini Tickets Manager

@endsection

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 150px;
  }
</style>

 <!--Sidebar-->

 <div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <div class="logo-container center">
            <img src="../img/logo.png" alt="" width="100px" height="100px">
          </div>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class= "active">
            <a href="/dashboard">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
        </li>
        <li>
          <a href="{{ route('games.index') }}">
            <i class="now-ui-icons files_paper "></i>
            <p>Tickets</p>
          </a>
        </li>
        <li>
          <a href="/settings">
            <i class="now-ui-icons ui-1_settings-gear-63"></i>
            <p>Settings</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
<!--Sidebar,--><!--Add here because need to active the sidebar  -->

<div class="card uper">
  <div class="card-header">
    Add Games Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('games.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Game Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Game</button>
      </form>
  </div>
</div>
@endsection
