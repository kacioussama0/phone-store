@php
    $html_tag_data = [];
    $title = 'Editer Une Appareil';
    $description= 'Ecommerce Product List Page'
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

            </div>
            <!-- Title and Top Buttons End -->


            <div class="row my-5">

                <div class="col-xl-4">
                    <div class="mb-5">
                        <x-alert />
                        <h2 class="small-title">Editer Une Appareil</h2>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('devices.update',$device)}}" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

                                    <x-c-input type="text" label="Nom : " name="name" id="name" value="{{$device->name}}"/>
                                    <x-c-input type="text" label="Slogan : " name="slug" id="slug" value="{{$device->slug}}"/>
                                    <x-c-input type="text" label="Description : " name="description" id="description" value="{{$device->description}}"/>

                                    
                                    <x-c-input  type="file" label="Image : " name="thumbnail" id="thumbnail" value="{{$device->thumbnail}}"/>
                                    <img class="mb-3" src="{{asset('storage/' . $device->thumbnail)}}" width="100" alt="{{$device->brand->name . '-' . $device->name}}">

                                    <div class="mb-3">
                                        <label for="brand_id" class="form-label">
                                            Marque:
                                        </label>
                                        <select name="brand_id" id="brand_id" class="form-select w-100">
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" @selected($brand->id == $device->brand_id)>{{$brand->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" @checked($device->enabled) value="1" name="enabled" id="enabled">
                                        <label class="form-check-label" for="enabled">
                                            Active
                                        </label>
                                    </div>

                                    <button type="submit"  class="btn btn-outline-primary btn-icon btn-icon-start">
                                        <i data-acorn-icon="save"></i>
                                        <span>Valider</span>
                                    </button>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
