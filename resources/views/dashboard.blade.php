@extends("layout.layout")

@section("content")

    <div class="dashboard-header">
        <p class="plagcheck-header">plagcheck</p>
        <p class="profile-name">
            <img src="{{asset("assets/image/sample-profile-photo.png")}}" class="profile-pic">
            Angelica Agata
            <a href="#"><img src="{{asset("assets/image/dropdown-icon.png")}}" width="15" height="10" class="ms-2"></a>
        </p>
    </div>

    <div class="row dashboard-row">
        <div class="col-md-12 dashboard-content">
            <p class="dashboard-title">Submission List</p>
            <p class="dashboard-subtitle">Task status will refresh automatically</p>
        </div>
    </div>

@stop
