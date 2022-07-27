@extends('html.master')
@section('title')
    animal Data Table
@endsection
@section('contents')
    <div class="container">
        <br />
        @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
            </div><br />
        @endif
    </div>
    <div class="col-xs-6">
        <form method="post" enctype="multipart/form-data" action="{{ url('/animal/import') }}">
            @csrf
            <input type="file" id="uploadName" name="animal_upload" required>
    </div>

    @error('animal_upload')
        <small>{{ $message }}</small>
    @enderror
    <button type="submit" class="btn btn-info btn-primary ">Import Excel File</button>
    </form>
    </div>

    <div><button type="button" class="btn btn-sm" data-toggle="modal" data-target="#animalModal">
            Create New animal
        </button></div>
    <div>
        {{ $dataTable->table(['class' => 'table table-bordered table-striped table-hover '], true) }}
    </div>
    <div class="modal" id="animalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="width:75%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <p class="modal-title w-100 font-weight-bold">Add New animal</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('animal') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}  

                    <div class="modal-body mx-3" id="inputfacultyModal">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>

                            {{-- <div class="form-group">
                                <label for="id" class="control-label">Pet Owner:</label><i style="color:red">*</i>
                                  <select class="form-control" name="id" id="firstName">
                                    @foreach($customers as $id => $customer)
                                      <option value="{{$id}}">{{$customer}}</option>
                                    @endforeach
                                  </select>
                                </div> --}}

                            <label data-error="wrong" data-success="right" for="petName"
                                style="display: inline-block; width: 150px; ">Pet Name</label><i style="color:red">*</i>
                            <input type="text" id="petName" class="form-control validate" name="petName">

                            <label data-error="wrong" data-success="right" for="age"
                            style="display: inline-block; width: 150px; ">Age</label><i style="color:red">*</i>
                            <input type="text" id="age" class="form-control validate" name="age">

                        <label data-error="wrong" data-success="right" for="Type"
                        style="display: inline-block; width: 150px; ">Type</label><i style="color:red">*</i>
                         <input type="text" id="Type" class="form-control validate" name="Type">

                            <label data-error="wrong" data-success="right" for="Breed"
                                style="display: inline-block; width: 150px; ">Breed</label><i style="color:red">*</i>
                            <input type="text" id="Breed" class="form-control validate" name="Breed">
                            
                            <label data-error="wrong" data-success="right" for="Sex"
                                style="display: inline-block; width: 150px; ">Sex</label><i style="color:red">*</i>
                            <input type="text" id="Sex" class="form-control validate" name="Sex">

                            <label data-error="wrong" data-success="right" for="Color"
                            style="display: inline-block; width: 150px; ">Color</label><i style="color:red">*</i>
                        <input type="text" id="Color" class="form-control validate" name="Color">
                        
                            <label data-error="wrong" data-success="right" for="image"
                                style="display: inline-block; width: 150px; ">animal Image</label>
                            <input type="file" id="image" class="form-control validate" name="image">
                       
                        </div>

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
