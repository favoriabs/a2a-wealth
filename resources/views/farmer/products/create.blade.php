@extends('layouts.main')

@section('navbar')
    @include('farmer.navbar')
@stop

@section('product_active')
    active
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    {{Form::open(array('route' => 'store_product', 'method' => 'POST', 'files' => 'true'))}}    
                        {{ csrf_field() }}
                        <div class="header text-center">Create Product</div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name </label>
                                        <input class="form-control" name="product_name" type="text" placeholder="Enter Product name" value="{{old('product_name')}}"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Variety </label>
                                        <input class="form-control" name="variety" type="text" placeholder="Enter Variety" value="{{old('variety')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Quality </label>
                                        <input class="form-control" name="quality" type="text" placeholder="Enter Product quality" value="{{old('quality')}}"/>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Quantity </label>
                                        <input class="form-control" name="quantity" type="text" placeholder="Enter Product quantity" value="{{old('quantity')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Price/Kg </label>
                                        <input class="form-control" name="price" type="text" placeholder="Enter Price per Kg" value="{{old('price')}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Shelf Life </label>
                                        <input class="form-control" name="shelf_life" type="text" placeholder="Enter shelf Life" value="{{old('shelf_life')}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Fertilization</label> <br/>
                                        <input type="checkbox" value="organic" name="fertilization"> Organic <br/>
                                        <input type="checkbox" value="inorganic" name="fertilization"> Inorganic 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Production</label> <br/>
                                        <input type="checkbox" value="greenhouse" name="production"> Green House <br/>
                                        <input type="checkbox" value="nethouse" name="production"> Net House <br/>
                                        <input type="checkbox" value="openfield" name="production"> Open Field
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Image of the Product(very clear picture)</label> <br/>
                                        <input type="file" name="product_pix_path" accept="image/*" value="{{old('product_pix_path')}}">
                                    </div>
                                </div>
                            </div>
                            <br/> <br/>
                            

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Register</button>
                        </div>
                    </div>
                    </form>
            </div>
            
        </div>
        @include('layouts.sessions')
        @include('layouts.errors')
    </div>
  </div>  
@stop