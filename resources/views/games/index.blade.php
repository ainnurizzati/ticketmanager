@extends('layouts.app')

@section('title')

Tickets | Dutarini Tickets Manager

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




<div class="uper">
    <td><a href="{{ route('games.create')}}" class="btn btn-primary">Add New</a></td>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Game Name</td>
          <td>Game Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->name}}</td>
            <td>{{$game->price}}</td>
            <td><a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('games.destroy', $game->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
