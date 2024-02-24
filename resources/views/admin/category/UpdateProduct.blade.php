@extends('admin.Layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit a product in the list.
                </header>
                <div class="panel-body">
                    @foreach ($updateProduct as $key => $updateValue )
                    <div class="form">
                        <form class="cmxform form-horizontal " id="signupForm" method="post"
                              action="{{url('/update-category-product/'.$updateValue->product_id)}}" novalidate="novalidate">
                            @csrf
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Product name</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="productName" name="productName" type="text" value="{{ $updateValue->product_name }}">
                                    @error('productName')
                                        <span id="productNameError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lastname" class="control-label col-lg-3">Price</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="price" name="price" type="text" value="{{ $updateValue->price }}">
                                    @error('price')
                                        <span id="priceError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="username" class="control-label col-lg-3">Size</label>
                                <div class="col-lg-6">
                                    <input class="form-control " id="size" name="size" type="text" value="{{ $updateValue->size }}">
                                    @error('size')
                                        <span id="sizeError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Producer</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="producer" name="producer" type="text" value="{{ $updateValue->producer }}">
                                    @error('producer')
                                        <span id="producerError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Amount</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="amount" name="amount" type="text" value="{{ $updateValue->amount }}">
                                    @error('amount')
                                        <span id="amountError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Created By</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="createdBy" name="createdBy" type="text" value="{{ $updateValue->created_by }}">
                                    @error('createdBy')
                                        <span id="createdByError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Created At</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="createdAt" name="createdAt" type="datetime-local" value="{{ $updateValue->created_at }}">
                                    @error('createdAt')
                                        <span id="createdAtError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Updated By</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="updatedBy" name="updatedBy" type="text" value="{{ $updateValue->updated_by }}">
                                    @error('updatedBy')
                                        <span id="updatedByError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Updated At</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="updatedAt" name="updatedAt" type="datetime-local" value="{{ $updateValue->updated_at }}">
                                    @error('updatedAt')
                                        <span id="updatedAtError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="firstname" class="control-label col-lg-3">Comment</label>
                                <div class="col-lg-6">
                                    <textarea style="resize: none" rows="8" class="form-control" name="comment" id="comment">{{ $updateValue->comment }}</textarea>
                                    @error('comment')
                                        <span id="commentError" class="error">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit" name="updateCategoryProduct">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
