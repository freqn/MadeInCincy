@extends('app')


@section('content')

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Whoops!</strong> There were some problems with your input.
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
         <h2>{{ Session::get('message') }}</h2>
    </div>
@endif


 <div id="map"></div>


<div class="wholeSide">
  <a class="filter" href="#"><i class="fa fa-gear"></i></a>
   <div class="sidebar">

      <div class="filterSingle">
        <a href="#" data-category='1' class="filterAction">
          <img src="images/icon.png">
          <h3>Company</h3>
        </a>
      </div>

      <div class="filterSingle">
        <a href="#" data-category='2' class="filterAction">
          <img src="images/accIcon.png">
          <h3>Accelerator</h3>
        </a>
      </div>

      <div class="filterSingle">
        <a href="#" data-category='3' class="filterAction">
          <img src="images/money.png">
          <h3>VC</h3>
        </a>
      </div>

      <div class="filterSingle">
        <a href="#" data-category='4' class="filterAction">
          <img src="images/school.png">
          <h3>University</h3>
        </a>
      </div>


      <div class="filterSingle">
        <a href="#" data-category='5' class="filterAction">
          <img src="images/coworking.png">
          <h3>Coworking Space</h3>
        </a>
      </div>


      <div class="filterSingle">
        <a href="#" data-category='5' class="getJobs">
          <img src="images/jobs.png">
          <h3>Jobs</h3>
        </a>
      </div>

      <div class="filterSingle">
        <a href="#" data-category='7' class="filterAction">
          <img src="images/eats.png">
          <h3>Eatery</h3>
        </a>
      </div>




      <div class="searchDiv">
        <input type="text" class="searchBox" name="search" placeholder="I'm Looking For...">
        <button type="submit" class="search btn btn-primary">Search</button>
      </div>


   </div>
 </div>

 <a target="_blank" class="jake" href="https://twitter.com/jakeboyles/">By @JakeBoyles</a>


 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST"  action="/company/store">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Company</h4>
      </div>
      <div class="modal-body">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Name *</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="name"
                           value="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Description *</label>

                <div class="col-md-6">
                    <textarea class="form-control" name="description"
                           value=""></textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Type of listing *</label>

                <div class="col-md-6">
                    <select class="form-control" name="type">
                    @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                    @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Lat * <a target="_blank" href="http://www.latlong.net/convert-address-to-lat-long.html">Try This</a></label>

                <div class="col-md-6">
                <input type="text" class="form-control" name="lat" value="">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Long *</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="long" value="">
                </div>
            </div>


             <div class="form-group">
                <label class="col-md-4 control-label">URL * (http://example.com)</label>

                <div class="col-md-6">
                <input type="text" class="form-control" name="url" value="">
                </div>
            </div>



            <P>* Locations will not be shown on the map until they have been approved by an admin.</P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>

    </form>
  </div>
</div>




 <!-- Modal -->
<div id="addPerson" data-backdrop="false" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST"  action="/person/store">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Person</h4>
      </div>
      <div class="modal-body">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Name *</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="name"
                           value="">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Company *</label>

                <div class="col-md-6">
                    <select class="form-control" name="company_id">
                    @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">LinkedIn:</label>

                <div class="col-md-6">
                    <input type="text" placeholder="https://www.linkedin.com/in/jakeboyles" class="form-control" name="linkedin"
                           value="">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Twitter (ex. jakeboyles)</label>

                <div class="col-md-6">
                    <input type="text" placeholder="jakeboyles" class="form-control" name="twitter"
                           value="">
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>

    </form>
  </div>
</div>






 <!-- Modal -->
<div id="addEats" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST"  action="/eats/store">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Eatery</h4>
      </div>
      <div class="modal-body">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-4 control-label">Name *</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" name="name"
                           value="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Description *</label>

                <div class="col-md-6">
                    <textarea class="form-control" name="description"
                           value=""></textarea>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Lat * <a target="_blank" href="http://www.latlong.net/convert-address-to-lat-long.html">Try This</a></label>

                <div class="col-md-6">
                <input type="text" class="form-control" name="lat" value="">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Long *</label>
                <div class="col-md-6">
                <input type="text" class="form-control" name="long" value="">
                </div>
            </div>


             <div class="form-group">
                <label class="col-md-4 control-label">URL (http://example.com)</label>

                <div class="col-md-6">
                <input type="text" class="form-control" name="url" value="">
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>

    </form>
  </div>
</div>




@endsection


