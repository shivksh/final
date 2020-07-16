@extends('layouts.master')

@section('title')
Dashboard | All data is here

@endsection



@section('content')

<div class="row">
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
                        Brand Type
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
                      <tr>
                        <td>
Movies&Entertainment                                     </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-lg">Manage</button>                        </td>
        
                      </tr>
                      <tr>
                        <td>
                            Food
                                     </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-lg">Manage</button>                        </td>
        
                      </tr>
                      <tr>
                        <td>
                            Fitness&Sports
                                     </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-lg">Manage</button>                        </td>
        
                      </tr>
                      <tr>
                        <td>
                            Magzines&Books
                                     </td>
                        <td>
                        <button type="button" class="btn btn-primary btn-lg">Manage</button>                        </td>
        
                      </tr>
                      <tr>
                        <td>
Other Brands                                     </td>
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
        </div>


@endsection


@section('scripts')

@endsection


