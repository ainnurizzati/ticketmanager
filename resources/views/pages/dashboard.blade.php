@extends('layouts.app')

@section('title')

Dashboard | Dutarini Tickets Manager

@endsection

@section('content')

<style>
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
          <a href="{{ route('projects.index') }}">
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


<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                        <h5>Dashboard</h5>

                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent

@endsection
