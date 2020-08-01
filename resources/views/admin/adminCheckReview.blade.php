@extends('layouts.master')

@section('title')
Dashboard | All data is here

@endsection



@section('content')

 <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{ $names[0]->Name  }}</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
Reviews
                      </th>
                      <th>
Reviewed By
                      </th>

                      <th>
Reviewed On
                      </th>

                      <th>
Activity
                      </th>

                      
                    </thead>
                    <tbody>
                    @for($i=0 ; $i < count($names); $i++)

@for($j=count($rate)-1 ; $j >= 0; $j--)

@if(($rate[$j]->Reviews)!=NULL)
 <tr>   
                        <td>
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
{{ $rate[$j]->Reviews }}
                                     </td>
                                     <td>
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
{{ $rate[$j]->userName }}
                                     </td>
                                     <td>
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
{{ $rate[$j]-> created_at }}
                                     </td>
                                     <td>
                            <i class="fa fa-hand-o-right mr-2" aria-hidden="true"></i>
                            <a href="{{ route('resolve',  $rate[$j]->Reviews  ) }}"> <button type="button" class="btn btn-primary btn-lg">Resolve </button></a>
                                     </td>
                                     

</tr>

@endif
@endfor

@endfor    
                      
                    </tbody>
                  </table>
                 <a href="{{route('insert')}}"> <button type="button" class="btn btn-primary btn-lg">Register New Brands</button></a>

                </div>
              </div>
            </div>
          </div>
        </div> 
        <a href="{{route('dashData')}}"> <button type="button" class="btn btn-primary btn-lg mt-5">Back to Admin Dashboard</button></a>




@endsection


@section('scripts')

@endsection


