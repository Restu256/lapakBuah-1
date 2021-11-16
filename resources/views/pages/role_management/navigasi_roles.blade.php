<div class="row">
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        @can('role-list')
        <a href="{{ route('users.index') }}" class="text-decoration-none">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dashboard-card-title">User</div>
                            <div class="dashboard-card-subtitle">#</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-user" aria-hidden="true" style="font-size: 70px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endcan
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        {{-- @can('role-list') --}}
        <a href="{{ route('routes.index') }}" class="text-decoration-none">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dashboard-card-title">Route Role User</div>
                            <div class="dashboard-card-subtitle">#</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-user" aria-hidden="true" style="font-size: 70px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        {{-- @endcan --}}
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        @can('role-list')
        <a href="{{ route('roles.index') }}" class="text-decoration-none">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="dashboard-card-title">Role User</div>
                            <div class="dashboard-card-subtitle">#</div>
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-user" aria-hidden="true" style="font-size: 70px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endcan
    </div>
  </div>