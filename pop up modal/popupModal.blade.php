

@section('content')


<button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Modal will pop up</button>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmation Message</h4>
        </div>
        <div class="modal-body">
          <p>Do you really want to Delete this?</p>
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-default float-right margin-left-10" data-dismiss="modal">Close</button>
        	<form>
        		<input type="submit" value="Delete" class="btn btn-danger float-right">
        	</form>
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>

@endsection