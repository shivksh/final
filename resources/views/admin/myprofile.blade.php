
@extends('layouts.master')

@section('title')
Dashboard | All data is here
@endsection
@section('content')

<table class="table mt-5">
                    <thead class=" text-primary">
                      <th>
Admin Profile                      </th>    
                    </thead>
                    <tbody>
                    @foreach($mag as $profile)
                    @if(($profile->usertype)!=NULL)

                      <tr>
                        <td>
                       Admin Name: {{ $profile->name }}
                                     </td>
                    
                      </tr>


                      <tr>
                        <td>
                       Admin Email: {{ $profile->email }}
                                     </td>
                    
                      </tr>
                      <tr>
                        <td>
                      Post:  {{ $profile->usertype }}
                                     </td>
                    
                      </tr>
                      
                      
                    </tbody>
                  </table>
        



                  @endif 



@endforeach


@endsection


@section('scripts')

@endsection