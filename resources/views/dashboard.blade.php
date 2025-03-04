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

        <div class="col-md-12 table-content-col">

            <div class="col-md-6">
                <p class="dashboard-title">Submission List</p>
                <p class="dashboard-subtitle">Task status will refresh automatically</p>
            </div>

            <div class="col-md-6 new-submission-button-col">
                <button type="button" class="new-submission-button">
                    <img src="{{asset("assets/image/plus-icon.png")}}" width="45" height="40">New Submission
                </button>
            </div>

            <!--
                <div class="col-md-12">
                    <table>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Word Count</th>
                            <th>Similarity</th>
                            <th>AI Writing</th>
                            <th>Status</th>
                            <th>Start at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            -->

        </div>

    </div>

@stop
