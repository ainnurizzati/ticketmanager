@extends('layouts.app')

@section('title')

View Tickets | Dutarini Tickets Manager

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
        <li>
            <a href="/dashboard">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
        </li>
        <li class= "active">
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

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="pull-left">
                <h5>View Ticket</h5>
            </div>

            <div class="row">
                <div class="col-lg-12 margin-tb">

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Employee Name:</strong>
                        {{ $project->staffname }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Name:</strong>
                        {{ $project->comp_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Address:</strong>
                        {{ $project->comp_address }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Company Representative:</strong>
                        {{ $project->comp_rep }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Services:</strong>
                        {{ $project->services }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $project->details }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date Created:</strong>
                        {{ date_format($project->created_at, 'jS M Y') }}
                    </div>
                </div>
            </div>


</div>
</div>
</div>
</div>
@endsection
