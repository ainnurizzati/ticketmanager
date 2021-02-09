@extends('layouts.app')

@section('title')

Tickets | Dutarini Tickets Manager

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
        <div class="card-header">
          <h5 class="card-title">List of Tickets</h5>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Create a project"  style="background-color:#ff6347;"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
        <div class="card-body">
        <br>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" style="background-color:#ff6347;">
                <p>{{ $message }}</p>
            </div>
        @endif

    <table class="table table-bordered table-responsive-lg">
        <tr style="text-align: center">
            <th>No</th>
            <th>Staff Name</th>
            <th>Company Name</th>
            <th>Company Address</th>
            <th>Company Rep.</th>
            <th>Services</th>
            <th>Details</th>
            <th>Date Created</th>
            <th width="150px" >Action</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->staffname }}</td>
                <td>{{ $project->comp_name }}</td>
                <td>{{ $project->comp_address }}</td>
                <td>{{ $project->comp_rep }}</td>
                <td>{{ $project->services }}</td>
                <td>{{ $project->details }}</td>
                <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
                <td style="text-align: center">
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="show">
                            <i class="fas fa-eye text-success fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}">
                            <i class="fas fa-edit fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}
</div>
</div>
</div>
</div>
@endsection
