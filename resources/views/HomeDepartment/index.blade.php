@extends('layouts.apps')
@section('content')
                  <div class="mt-1">
                    <div class="text-secondary-d3 text-180">132</div>
                    <div class="text-dark-tp4 text-110">new followers</div>
                  </div>

                  <div class="text-blue-m1 font-bolder position-tr m-2">
                    6%
                    <i class="fas fa-caret-up text-120"></i>
                  </div>
                </div>
              </div>


              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">
                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="mb-1">
                    <span class="d-inline-block bgc-pink-l3 p-3 radius-round">
                <i class="fa fa-shopping-cart text-pink-m2 text-170 w-4"></i>
            </span>
                  </div>

                  <div class="mt-1">
                    <div class="text-secondary-d3 text-180">46</div>
                    <div class="text-dark-tp4 text-110">new orders</div>
                  </div>

                  <div class="text-orange-d2 pr-1 font-bolder position-tr m-2">
                    1%
                    <i class="fa fa-caret-down text-120"></i>
                  </div>
                </div>
              </div>


              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">
                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="flex-grow-1">
                    <div class="text-secondary-d3 text-180">6,205</div>
                    <div class="text-dark-tp4 text-110">page views</div>
                  </div>

                  <div class="text-blue-m1 font-bolder position-tr m-2">
                    9%
                    <i class="fa fa-caret-up text-120"></i>
                  </div>

                  <div class="mt-2 w-100">
                    <canvas id="chart-1" style="height: 60px; width: 100%;" class="ml-n1"></canvas>
                  </div>
                </div>
              </div>


              <div class="col-12 col-sm-6 col-md-3 px-2 mb-1 mb-md-0">
                <div class="bcard d-flex flex-column text-center px-2 py-3 h-100">
                  <div class="text-secondary-d2 text-110 text-nowrap">Traffic Sources</div>

                  <div class="m-auto pt-2 w-75">
                    <canvas id="piechart"></canvas>
                  </div>
                </div>
              </div>
            </div>







            

                 
                </div>
              </div><!-- /.col -->



            </div><!-- /.row -->
          </div>
@endsection 