@extends('layouts.app')

@section('title')

Edit Tickets | Dutarini Tickets Manager

@endsection

@section('content')

    <!--CSS-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/bootstrap.min.css.map') }}" rel="stylesheet">
    <link href="{{ url('/css/bootstrapD.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/now-ui-dashboard.css') }}" rel="stylesheet">
    <link href="{{ url('/css/now-ui-dashboard.css.map') }}" rel="stylesheet">
    <link href="{{ url('/now-ui-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ url('/now-ui-dashboardD.css') }}" rel="stylesheet">
    <link href="{{ url('/now-ui-dashboardD.min.css') }}" rel="stylesheet">
    <link href="{{ URL("img/logo.png") }}" rel="stylesheet">


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
            <img src="/img/logo.png" alt="Dutarini Tickets Manager" width="100px" height="100px">
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

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit Ticket</h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Employee Name</label>
                <select class="form-control" name="staffname" id="staffname">
                    <option value="">{{ $project->staffname }}</option>
                    <option value="Afiq">Afiq</option>
                    <option value="Shah">Shah</option>
                    <option value="Alif">Alif</option>
                    <option value="Hafizul">Hafizul</option>
                    <option value="Danial">Danial</option>
                    <option value="Farhan">Farhan</option>
                </select>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <br>
                <div class="form-group">
                    <strong>Company Name</strong>
                    <input type="text" name="comp_name" value="{{ $project->comp_name }}" class="form-control" placeholder="Enter company name">
                </div>
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Company Address</strong>
                    <textarea class="form-control" style="height:50px" name="comp_address" placeholder="Enter company address">{{ $project->comp_address }}</textarea>
                </div>
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Company Representative</strong>
                    <input type="text" name="comp_rep" value="{{ $project->comp_rep }}" class="form-control" placeholder="Enter company representative">
                </div>
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Services</strong>
                    <textarea class="form-control" style="height:50px" name="services" placeholder="Enter services">{{ $project->services }}</textarea>
                </div>
                <br>
            </div> <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details</strong>
                    <textarea class="form-control" style="height:50px" name="details" placeholder="Enter details">{{ $project->details }}</textarea>
                </div>
                <br>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</div>
</div>
</div>
</div>
@endsection

@section('scripts')


<!--JS-->

<script src="../js/core/jquery.min.js"></script>
<script src="..js/core/popper.min.js"></script>
<script src="../js/core/bootstrap.min.js"></script>

<script src="../js/plugins/bootstrap-notify.js"></script>
<script src="../js/plugins/chartjs.min.js"></script>
<script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>

<script src="../js/app.js"></script>
<script src="../js/now-ui-dashboard.js"></script>
<script src="../js/now-ui-dashboard.js.map"></script>
<script src="../js/now-ui-dashboard.min.js"></script>


@endsection
