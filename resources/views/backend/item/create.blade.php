@extends('layouts.backendtemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Item Create Form</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">Form Example</h6>

        <a href="{{route('item.index')}}" class="btn btn-outline-info float-right">Back</a>
      </div>
      <div class="card-body">
        {{-- Change Error Message UI (try yourself) --}}
        <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
          @csrf
          @php
            if ($lastItem) {
              $codeno = '000'.++$lastItem->codeno;
            }else{
              $codeno = '0001';
            }
          @endphp
          <div class="row mb-3">
            <label for="inputCodeno" class="col-sm-2 col-form-label">Codeno</label>
            <div class="col-sm-10">
              <input type="text" name="codeno" class="form-control @error('codeno') is-invalid @enderror" id="inputCodeno" value="{{$codeno}}" readonly="readonly">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName">
              @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
              <select name="brand" class="form-control" id="inputBrand">
                <optgroup label="Choose Brand">
                  @foreach($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputSubcategory" class="col-sm-2 col-form-label">Subcategory</label>
            <div class="col-sm-10">
              <select name="subcategory" class="form-control" id="inputSubcategory">
                <optgroup label="Choose Subcategory">
                  @foreach($subcategories as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                  @endforeach
                </optgroup>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
              <input type="file" name="photo" class="form-control form-control-file @error('photo') is-invalid @enderror" id="inputPhoto">
              @if ($errors->has('photo'))
                  <span class="text-danger">{{ $errors->first('photo') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="inputPrice">
              @if ($errors->has('price'))
                  <span class="text-danger">{{ $errors->first('price') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputDiscount" class="col-sm-2 col-form-label">Discount</label>
            <div class="col-sm-10">
              <input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror" id="inputDiscount">
              @if ($errors->has('discount'))
                  <span class="text-danger">{{ $errors->first('discount') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <textarea name="description" class="summernote @error('description') is-invalid @enderror" id="inputDescription"></textarea>
              @if ($errors->has('description'))
                  <span class="text-danger">{{ $errors->first('description') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
@section('script')
  {{-- Summernote --}}
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  <script>
    $('.summernote').summernote({
      placeholder: 'Item Description Here!',
      tabsize: 2,
      height: 200
    });
  </script>
@endsection