@extends('layouts.admin')

@section('content')

<!-- Main Content -->
<div class="main-content"> 
    <section class="section">
      <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15">Users</h5>
                      <h2 class="mb-3 font-18">12</h2>
                      <p class="mb-0"><span class="col-green">12 </span> Verified </p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                    <div class="banner-img">
                      <img src="assets/img/banner/users.jpeg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.sections.settings')
</div>

@endsection
