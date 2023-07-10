<!-- Title -->
<h2 class="card-header-title h4 text-uppercase ps-lg-1">
    REVIEWS
</h2>

<!-- Dropdown -->
<div class="dropdown">
    <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-gray-500" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
            <g>
                <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor" />
                <circle cx="12" cy="12" r="3.25" style="fill: currentColor" />
                <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor" />
            </g>
        </svg>
    </a>
    <div class="dropdown-menu">
        <a href="javascript: void(0);" class="dropdown-item">
            Export report
        </a>
        <a href="javascript: void(0);" class="dropdown-item">
            Share
        </a>
        <a href="javascript: void(0);" class="dropdown-item">
            Action
        </a>
    </div>
</div>
</div>

<!-- Table -->
<div class="table-responsive">
    <table id="projectsTable" class="table align-middle text-center table-edge table-nowrap mb-0">
        <thead class="thead-light">
            <tr>
                <th>Review</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <td class="text-start">
                    <span class="stars-reviews">
                        @for($i = 0; $i < $review["count"] ; $i++) <img src="{{asset('assets_project/assets/images/star.svg')}}" class="star" alt="...">
                                        @endfor
                    </span>
                </td>
                <td class="text-muted">{{ $review['user'] }}</td>
                <td class="text-muted">{{ $review['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> <!-- / .table-responsive -->