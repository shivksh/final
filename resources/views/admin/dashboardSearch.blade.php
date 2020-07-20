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
                  <table class="table" >
                    <thead class=" text-primary">
                      <th>
                        Brand Name
                      </th>
                      <th>
Service                     </th>
                      <th>
Email                     </th>
                      
<th>
Website                    </th>
<th>
Contact            </th>
<th>
CEO                     </th>
<th>
Ratings                   </th>
<th>
Likes                      </th>
<th>
Total_reviews                      </th>
<th>
Edit                      </th>
<th>
Delete                      </th>
<th>
Check Reviews                      </th>
                      
                      
                      
                    </thead>
                    <tbody>
                    @foreach($result as $data)
                      <tr>
                        <td>
                            {{$data->Name}}
                                     </td>
                                     <td>
                            {{$data->Details}}
                                     </td>

                                     <td>
                            {{$data->Email}}
                                     </td><td>
                            {{$data->Website}}
                                     </td><td>
                            {{$data->Contact}}
                                     </td><td>
                            {{$data->CEO}}
                                     </td>
                                     <td>
                            {{$data->Average}}
                                     </td>
                                     <td>
                            {{$data->Likes}}
                                     </td>
                                     <td>
                            {{$data->Total_reviews}}
                                     </td>
                                     <td>
                                     <a href="{{ route('edit',$data->Id) }}">   <button class="btn btn-primary"  >Edit</button></a>

                                     </td>
                                     <td>
                                    <a  href="{{ route('delete',$data->Id) }}"> <button type="button" class="btn btn-danger">Delete</button></a>
                                     </td>

                                     <td>
                                  <a href="{{ route('adminReview',$data->Name) }}">   <button class="btn btn-primary"  >Reviews</button></a>
                                     </td>
                      </tr>
                      @endforeach
                     
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


