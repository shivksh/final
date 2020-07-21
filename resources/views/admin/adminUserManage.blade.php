@extends('layouts.master')

@section('title')
Dashboard | All data is here

@endsection



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Users Manage</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        User Name
                      </th>
                      <th>
Email                     </th>
                      <th>
Phone No.                   </th>
                      


<th>
Edit                    </th>
<th>
Delete                      </th>
                      
                      
                      
                    </thead>
                    <tbody>
                    @foreach($mag as $data)
                      <tr>
                      @if(($data->usertype)==NULL)
                        <td>
                            {{$data->name}}
                                     </td>
                                     <td>
                            {{$data->email}}
                                     </td>

                                     <td>
                            {{$data->phone}}
                                     </td>
                                     <td>
                                  <a href="{{route('userEdit',$data->id)}}">   <button class="btn btn-primary"  >Edit</button></a>
                                     </td>
                                     <td>
                                    <a  href="{{route('userDelete',$data->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                                     </td>
                      </tr>
                      @endif
                      @endforeach
                     
                    </tbody>
                  </table>
                  <div>
        {{$mag->links()}}
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection


@section('scripts')

@endsection


