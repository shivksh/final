@extends('layouts.master')

@section('title')
Dashboard | All data is here

@endsection



@section('content')

<!-- <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Admin Dashboard</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Brand Name
                      </th>
                      <th>
Manage Brands                      </th>
                      
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            Business&Enterpreneurship
                                     </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-lg">Manage</button>                        </td>
        
                      </tr>
                      
                        
                      
                      
                     
                      
                    </tbody>
                  </table>
                 <a href="{{route('insert')}}"> <button type="button" class="btn btn-primary btn-lg">Register New Brands</button></a>

                </div>
              </div>
            </div>
          </div>
        </div> -->
        <a href="{{route('dashData')}}"> <button type="button" class="btn btn-primary btn-lg mt-5">Click Admin Dashboard</button></a>




@endsection


@section('scripts')

@endsection


