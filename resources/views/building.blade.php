
     @extends('layouts.main')

     @section('title',$building->name)
    
     @section('content')


      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

          <br/>
        
              <IMG class="displayed" src="{{URL::to('/assets')}}/{{$building->picture}}" alt="" style="height:300px; width:500px;">
          <br/>  


            <div class="Bldgttl">
              {{$building->name}}
            </div>

  
        <center>
       
   <div class="input-group col-xs-6 col-md-5" >
          <input type="text" name="search" id="search-office" class="form-control" placeholder="Search...">
            </div>
        </center>

 

        <div class="container">
            <div class="table responsive-vertical">
                <table class="table table-bordered table striped table-hover table-mclight-blue">
                    <thead>
                      <tr>


                          <th>Offices @if(session()->has('username'))

                <a href="{{route('createofficeform', $building->id)}}" class="btn btn-link btn-sm"><i class="fas fa-plus"></i>Add Office</a>
                              @endif


                          </th>

                          <th>Floor</th>
                         @if(session()->has('username'))
                          <th>Action</th>
                          @endif
                            
                        </tr>
                      </thead>

                    <tbody>
                      @foreach($offices as $office)
                <tr>

                <td data-title="Office">{{optional($office)->name}}</td>
                <td data-title="Floor">{{$office->floor}}</td>
                <td>

              
                   @if(session()->has('username'))
                  <a href="{{route('editofficeform', ['id'=>$office->building->id, 'office_id'=>$office->id])}}" title="edit" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('deleteoffice', $office->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                 @endif

                </td>

              </tr>

             
            @endforeach
  

                  </tbody>
                </table>
              </div>
            </div>

       <script type="text/javascript">
           $("body").on("input", "#search-office", function() {
                    
                    var text_filter = $(this).val();
                    var rex = new RegExp(text_filter, 'i');
                    $("table").find("tbody").find("tr").hide();
                    $('table tbody tr').filter(function () {
                           return rex.test($(this).text())
                       }).show();
                   });
        </script>  
@endsection












     