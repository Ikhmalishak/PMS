<x-app-layout>
    <div class="page-content">
        <div clas="container-fluid">
            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            @if (Auth::user()->user_type != 'Student')
                            <div>
                                <a href="{{ route('election.create') }}"><button
                                        class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"><i
                                            class="mdi mdi-plus-circle-outline mr-2"></i>Add new candidate</button>
                                </a>
                                <a href="{{ route('election.leaderboard') }}"><button
                                        class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"
                                        style="margin-right: 30px;"><i class="mdi mdi-plus-circle-outline mr-2"></i>View
                                        Leaderboard</button>
                                </a>
                            </div>
                            @else
                            <div>
                                <a href="{{ route('election.vote') }}"><button
                                        class="btn btn-gradient-primary px-4 float-right mt-0 mb-3"
                                        style="margin-right: 30px;"><i
                                            class="mdi mdi-plus-circle-outline mr-2"></i>Vote</button> </a>
                            </div>
                            @endif

                            <h4 class="header-title mt-0">List of Candidates</h4>

                            <br>
                            <br>

                            <form action="{{ route('election.search') }}" method="GET">
                                @csrf

                                <input type="text" name="search" placeholder="Search by name"
                                    style="border: none; border-bottom: 1px solid black;">
                                <button type="submit" class="fas fa-search" value="Search"></button>

                            </form>

                            <br>
                            <br>
                            <br>

                            <form action="{{ route('election.filter') }}" method="GET">
                                <div class="form-group">
                                    <label for="year">Filter by Year of Election:</label>
                                    <select class="form-control" name="year">
                                        <option>Change Year</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>

                            <br>

                            <br>

                            <div class="table-responsive dash-social">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Picture</th>
                                            <th class="text-center">Name</th>
                                            <!-- <th class="text-center">Faculty</th> -->
                                            <th class="text-center">Year</th>
                                            <th class="text-center">Course</th>
                                            <th class="text-center">Manifesto</th>
                                            <th class="text-center">Interest</th>
                                            <th class="text-center">CGPA</th>
                                            <th class="text-center">Election Year</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        <!--end tr-->
                                    </thead>

                                    <tbody>
                                        @forelse($election as $election)
                                        <tr>
                                            <td><img src="{{ asset('uploads/candidates/' . $election->candidate_picture) }}"
                                                    alt="candidate_picture" width="50" height="50"></td>
                                            <td class="text-center">{{ $election->candidate_name }}</td>
                                            <!-- <td class="text-center">{{ $election->candidate_faculty }}</td> -->
                                            <td class="text-center">{{ $election->candidate_year }}</td>
                                            <td class="text-center">{{ $election->candidate_course }}</td>
                                            <td class="text-center">{{ $election->candidate_manifesto }}</td>
                                            <td class="text-center">{{ $election->interest }}</td>
                                            <td class="text-center">{{ $election->cgpa }}</td>
                                            <td class="text-center">{{ $election->election_year }}</td>
                                            <td>


                                            @if (Auth::user()->user_type != 'Student')
    <div style="display: flex; align-items: center;">
        <a href="{{ route('election.edit', $election->id) }}" style="margin-right: 10px;"><i class="far fa-edit text-info"></i></a>

        <form id="delete-form" action="{{ route('election.destroy', $election->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button id="delbutton" type="submit" style="cursor: pointer; border: none; background-color: transparent;"><i class="far fa-trash-alt text-danger"></i></button>
        </form>
    </div>
@else
    <a href="{{ route('election.show', $election->id) }}" style="margin-right: 10px;"><i class="far fa-eye text-success"></i></a>
@endif





                                            </td>
                                        </tr>
                                        <!--end tr-->
                                        @empty
                                        <p class="text-warning">No candidate registered</p>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
</x-app-layout>

<script>
    ! function ($) {
        "use strict";

        var SweetAlert = function () { };

        SweetAlert.prototype.init = function () {

            //Parameter
            $('#delbutton').click(function (e) {
                e.preventDefault(); // prevent the form from submitting
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete this data!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '$success',
                    cancelButtonColor: '$danger',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        //submit the form here
                        $("#delete-form").submit();
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your data has been deleted.',
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        })
                    }
                })
            });


        },
            //init
            $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
    }(window.jQuery),

        //initializing
        function ($) {
            "use strict";
            $.SweetAlert.init()
        }(window.jQuery);
</script>