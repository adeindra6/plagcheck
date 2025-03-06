@extends("layout.layout")

@section("content")
    <div class="dashboard-header">
        <p class="plagcheck-header">plagcheck</p>
        <p class="profile-name">
            <img src="{{asset("assets/image/sample-profile-photo.png")}}" class="profile-pic">
            Admin
            <button type="button" class="dropdown-button" onclick="toggleDropdown()">
                <img src="{{asset("assets/image/dropdown-icon.png")}}" width="15" height="10" class="ms-2">
            </button>
        </p>
        <a href="{{route("logout")}}" class="btn btn-light dropdown-profile" style="display: none;" type="button" id="logout-button">
            Logout
        </a>
    </div>

    <div class="row dashboard-row">
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-6">
                    <p class="dashboard-title">Submission List</p>
                    <p class="dashboard-subtitle">Task status will refresh automatically</p>
                </div>
                <div class="col-md-6 new-submission-button-col">
                    <button type="button" class="new-submission-button">
                        <img src="{{asset("assets/image/plus-icon.png")}}" width="45" height="40">New Submission
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 table-col">
                    <hr class="hr">
                    <div class="col-md-12">
                        <table class="submission-table">
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
                            <tbody>
                                <tr>
                                    <td>THE INFLUENCE OF ..</td>
                                    <td>6095</td>
                                    <td class="success">27% <a href="{{ route("downloadFile", "similarity_1") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="success">66% <a href="{{ route("downloadFile", "ai_1") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="status-success">Success</td>
                                    <td>22/02/2025</td>
                                    <td>
                                        <button class="detail-btn">Detail <i class="fas fa-info-circle"></i></button>
                                        <button class="delete-btn">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Aircraft using YOLO..</td>
                                    <td>1240</td>
                                    <td class="error">Error</td>
                                    <td class="unsupported">Unsupported</td>
                                    <td class="status-failed">Failed</td>
                                    <td>21/02/2025</td>
                                    <td>
                                        <button class="detail-btn">Detail <i class="fas fa-info-circle"></i></button>
                                        <button class="delete-btn">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INFERENSI TERHAD..</td>
                                    <td>3601</td>
                                    <td class="success">24% <a href="{{ route("downloadFile", "similarity_3") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="success">33% <a href="{{ route("downloadFile", "ai_3") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="status-success">Success</td>
                                    <td>25/01/2025</td>
                                    <td>
                                        <button class="detail-btn">Detail <i class="fas fa-info-circle"></i></button>
                                        <button class="delete-btn">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Object Detection..</td>
                                    <td>2564</td>
                                    <td class="success">15% <a href="{{ route("downloadFile", "similarity_4") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="unsupported">Unsupported</td>
                                    <td class="status-success">Success</td>
                                    <td>01/02/2025</td>
                                    <td>
                                        <button class="detail-btn">Detail <i class="fas fa-info-circle"></i></button>
                                        <button class="delete-btn">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Implementation Of Deep..</td>
                                    <td>3867</td>
                                    <td class="success">33% <a href="{{ route("downloadFile", "similarity_5") }}" style="color: inherit"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <td class="unsupported">Unsupported</td>
                                    <td class="status-success">Success</td>
                                    <td>11/01/2025</td>
                                    <td>
                                        <button class="detail-btn">Detail <i class="fas fa-info-circle"></i></button>
                                        <button class="delete-btn">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="hr-bottom">
                </div>
                <div class="pagination">
                    <span>Page 1 of 3</span>
                    <button><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    <button><i class="fa fa-step-forward" aria-hidden="true"></i></button>
                 </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: center">copyright {{ date("Y") }} - <strong>PlagCheck.id</strong></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            let logout = document.getElementById("logout-button");

            if(logout.style.display == "none") {
                logout.style.display = "block";
            }
            else {
                logout.style.display = "none";
            }
        }
    </script>
@stop
