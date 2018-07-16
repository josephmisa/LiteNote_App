
      @extends('layouts.main')

      @section('title', 'List of Buildings')


      @section('content')

      
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
     

<center>
        <img class="guide" src="../assets/Eguide.png" id="previewImg" style="height:300px; width:300px;" alt="">
</center>

<br/>   




            <div class="Bldgttl">
                UNIVERSITY E GUIDE
                </div>      

                <center>

     <div class="input-group col-xs-6 col-md-5" >
         <input type="text" name="search" id="search-building" class="form-control" placeholder="Search...">
        
              </center>

        <div class="container">
            <div class="table responsive-vertical">
                <table class="table table-bordered table striped table-hover table-mclight-blue">
                    <thead>
                      <tr>


                          <th>Building  @if(session()->has('username'))

                 <a href="{{route('createbform')}}" class="btn btn-link btn-sm"><i class="fas fa-plus"></i> Add Building</a> 
                 @endif
       
                          </th>

                     
                         @if(session()->has('username'))
                          <th>Action</th>
                             @endif
                        </tr>
                      </thead>

                    <tbody>
                      @foreach($buildings as $building)
                        <tr>

                        <td data-title="Building">{{$building->name}}</td>
                        
                        <td>



                  
                   @if(session()->has('username'))
                  <a href="{{url('building', $building->id)}}" class="btn btn-primary btn-sm" title='Offices'><i class="fas fa-briefcase"></i> Offices</a>

                <a href="{{url('building', $building->id)}}/edit" class="btn btn-success btn-sm" title='Edit'><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('building', $building->id)}}/delete" class="btn btn-danger btn-sm" title='Delete'> <i class="fas fa-trash"></i></a>
                @endif

                

                </td>
              </tr>
            @endforeach

                  </tbody>
                </table>
              </div>
            </div>
            
       {{$buildings->links()}}
      

        <script type="text/javascript">
           $("body").on("input", "#search-building", function() {
                    
                    var text_filter = $(this).val();
                    var rex = new RegExp(text_filter, 'i');
                    $("table").find("tbody").find("tr").hide();
                    $('table tbody tr').filter(function () {
                           return rex.test($(this).text())
                       }).show();
                   });
        </script>
       @endsection


       
   
         