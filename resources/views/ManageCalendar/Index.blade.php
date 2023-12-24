<x-app-layout>
        {{-- <button class="btn btn-gradient-primary"><a href="{{ route('bulletin.show', $bulletin->id) }}">View More</a></button> --}}


    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>
                        <!-- <h4 class="page-title">Bulletin Board</h4> -->
                        <h2>Calendar</h2>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <body class="dark-topbar">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div id='calendar'></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>

        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ['dayGrid'],
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: {!! $events !!}
                });

                calendar.render();
            });
        </script>
    </body>

        <footer class="footer text-center text-sm-left">
            &copy; 2019 Metrica <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
    </div>
        <!-- end page content -->
</x-app-layout>

        <!-- refer file:///C:/Users/iski/Documents/light-material-vertical/projects/projects-project.html -->
        <!-- refer file:///C:/Users/iski/Documents/light-material-vertical/pages/pages-blogs.html -->
