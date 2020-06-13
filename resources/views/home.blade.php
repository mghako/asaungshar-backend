@extends('layouts.app')
@section('page-title', 'Dashboard')
@section('content')
    <div class="home d-flex justify-content-between">
        <div class="w-25 h-25 card mr-2">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">Hostels</div>
                <div class="card-tools">
                    <a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i> Add</a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-title">
                    Total  - 
                </div>
            </div>
        </div>
        <div class="w-25 h-25 card mr-2">
            <div class="card-header">
                <div class="card-title">Views</div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus distinctio temporibus blanditiis, molestias velit quis consequatur aliquid a. Dolor commodi voluptatibus placeat illo ducimus ab pariatur tempora officiis id vitae.</p>
            </div>
        </div>
        <div class="w-25 h-25 card mr-2">
            <div class="card-header">
                <div class="card-title">Views</div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus distinctio temporibus blanditiis, molestias velit quis consequatur aliquid a. Dolor commodi voluptatibus placeat illo ducimus ab pariatur tempora officiis id vitae.</p>
            </div>
        </div>
        <div class="w-25 h-25 card">
            <div class="card-header">
                <div class="card-title">Views</div>
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus distinctio temporibus blanditiis, molestias velit quis consequatur aliquid a. Dolor commodi voluptatibus placeat illo ducimus ab pariatur tempora officiis id vitae.</p>
            </div>
        </div>
    </div>


    {{-- modal for adding hostels --}}
    <!-- Vertically centered scrollable modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Add Hostels</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('hostels.store') }}" method="POST" >
                  @csrf
                  {{-- city --}}
                  <div class="form-group row">
                    <label for="name" class="col-md-4">
                        City
                    </label>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control outline-none @error('name') is-invalid @enderror" autocomplete="off">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel name --}}
                  <div class="form-group row">
                    <label for="name" class="col-md-4">
                        Name  
                    </label>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control outline-none @error('name') is-invalid @enderror" autocomplete="off">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel number of rooms --}}
                  <div class="form-group row">
                    <label for="number_of_room" class="col-md-4">
                        Number of Room  
                    </label>
                    <div class="col-md-8">
                        <input type="number" name="number_of_room" id="number_of_room" class="form-control outline-none @error('number_of_room') is-invalid @enderror" autocomplete="off">
                        @error('number_of_room')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel number of person --}}
                  <div class="form-group row">
                    <label for="number_of_person" class="col-md-4">
                        Number of Person  
                    </label>
                    <div class="col-md-8">
                        <input type="number" name="number_of_person" id="number_of_person" class="form-control outline-none @error('number_of_person') is-invalid @enderror" autocomplete="off">
                        @error('number_of_person')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel monthly fee --}}
                  <div class="form-group row">
                    <label for="monthly_fee" class="col-md-4">
                        Monthly Fee  
                    </label>
                    <div class="col-md-8">
                        <input type="number" name="monthly_fee" id="monthly_fee" class="form-control outline-none @error('monthly_fee') is-invalid @enderror" autocomplete="off">
                        @error('monthly_fee')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel address --}}
                  <div class="form-group row">
                    <label for="address" class="col-md-4">
                        Address  
                    </label>
                    <div class="col-md-8">
                        <input type="text" name="address" id="address" class="form-control outline-none @error('address') is-invalid @enderror" autocomplete="off">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  {{-- hostel Phone --}}
                  <div class="form-group row">
                    <label for="phone" class="col-md-4">
                        Phone  
                    </label>
                    <div class="col-md-8">
                        <input type="text" name="phone" id="phone" class="form-control outline-none @error('phone') is-invalid @enderror" autocomplete="off">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add</button>
                  </div>
              </form>
            </div>            
          </div>
        </div>
      </div>
@endsection
