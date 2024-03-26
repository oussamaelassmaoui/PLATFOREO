@extends('layouts.dashboardnav')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle">
                                <i class="flaticon-goal"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalProject}}</h3>
                            <span>Total Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-00b69b">
                                <i class="flaticon-learning"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{$totalArticle}}</h3>
                            <span>Total Article</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl col-xl-4 col-sm-6 col-md-4">
            <div class="stats-box style-two card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="flex-shrink-0">
                            <div class="icon transition rounded-circle bg-ee368c">
                                <i class="flaticon-struggle"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3 class="body-font fw-bold fs-3 mb-2">{{ $totalVisits }}</h3>
                            <span>Total number of visits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-0">Visits Chart</h4>
            </div>
            <canvas id="visitChart" width="500" height="200"></canvas>
        </div>
    </div>




    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">Users List</h4>

            </div>

            <div class="default-table-area members-list">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">IP address</th>
                                <th scope="col">Page visited</th>
                                <th scope="col">User Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($visits as $visit)
                                <tr class="text-center">
                                    <td>
                                        <h4 class="fw-semibold fs-16 mb-0">{{ $visit->ip_address }}</h4>
                                    </td>
                                    <td>
                                        <span>{{ $visit->page_visited }}</span>
                                    </td>
                                    <td>
                                        <a href="mailto:[email protected]">{{ $visit->user_agent }}</a>
                                    </td>

                                </tr>
                            @empty
                            <h4>No data available.</h4>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <br>
                <div class="d-sm-flex justify-content-between align-items-center text-center">
                 
                   
                    <nav aria-label="Page navigation example">
                        <ul class="pagination  mb-0 mt-3 mt-sm-0 justify-content-center">
                            <li class="page-item">
                                <a class="page-link icon" href="{{ $visits->previousPageUrl() }}" aria-label="Previous">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </li>
                            @foreach ($visits->getUrlRange(1, $visits->lastPage()) as $page => $url)
                                <li class="page-item{{ $visits->currentPage() === $page ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach
                            <li class="page-item">
                                <a class="page-link icon" href="{{ $visits->nextPageUrl() }}" aria-label="Next">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
            </div>
        </div>
    </div>























    <!-- Include Chart.js from CDN -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('visit-chart-data') }}",
                method: 'GET',
                success: function(data) {
                    var ctx = document.getElementById('visitChart').getContext('2d');
                    var visitChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: Object.keys(data),
                            datasets: [{
                                    label: 'Nombre de visites',
                                    data: Object.values(data),
                                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                    borderColor: 'rgba(54, 162, 235, 1)',
                                    borderWidth: 1
                                },

                            ]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
