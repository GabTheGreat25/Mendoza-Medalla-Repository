@extends('html.usermaster')
@section('contents')

<div><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#listenerModal">
  create new consultation
</button></div>

<form class="navbar-form navbar-left" method="POST" role="search" action="{{route('petsearch')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <input type="text" name="search" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
</form></li>

  <div >
    {{$dataTable->table(['class' => 'table table-bordered table-striped table-hover '], true)}}
  </div>
  
  <div class="modal" id="listenerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:75%;">
      <div class="modal-content">
        <div class="modal-header text-center">
          <p class="modal-title w-100 font-weight-bold">Add new consultation </p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form method="post" action="{{url('consultation')}}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">

            <div class="md-form mb-5">
                <label for="employee_id">Employee Name Incharged:</label>
                {!!
                 Form::select('employee_id', App\Models\Employee::pluck('name', 'id'), null, [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <div class="md-form mb-5">
                <label for="animals_id">Pet Name:</label>
                {!!
                 Form::select('animals_id', App\Models\Animal::pluck('petName', 'id'), null, [
                    'class' => 'form-control',
                ]) !!}
            </div>

            <label data-error="wrong" data-success="right" for="dateConsult" style="display: inline-block; width: 150px; ">Date of Consultation:</label>
              <input type="date" class="form-control" id="dateConsult" name="dateConsult" value="2022-01-01"
            min="2000-01-01" max="2030-12-31">


            <label data-error="wrong" data-success="right" for="fees"
            style="display: inline-block; width: 150px; ">Fees:</label>
        <input type="text" id="fees" class="form-control validate" name="fees">

        <label data-error="wrong" data-success="right" for="comment"
        style="display: inline-block; width: 150px; ">Comment:</label>
    <input type="text" id="comment" class="form-control validate" name="comment">
        </div>


        <div class="md-form mb-5">
            <label for="disease_injuries_id">Any disease/injury?</label>
            {!!
             Form::select('disease_injuries_id', App\Models\diseases_injuries::pluck('title', 'id'), null, [
                'class' => 'form-control',
            ]) !!}
        </div>
{{-- 
<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
  @push('scripts')
    {{$dataTable->scripts()}}
  @endpush
@endsection --}}

<div class="modal-footer d-flex justify-content-center">
    <button type="submit" class="btn btn-success">Save</button>
    <button class="btn btn-light" data-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>

</div>
@push('scripts')
{{ $dataTable->scripts() }}
@endpush
@endsection