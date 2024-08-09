@php
    $html_tag_data = [];
    $title = 'List Des Appareils';
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
                   <h2 class="small-title">Ajout Une Appareil</h2>
                   <div class="card">
                       <div class="card-body">
                           <form method="POST" action="{{route('devices.store')}}" enctype="multipart/form-data">

                               @csrf

                               <x-c-input type="text" label="Nom : " name="name" id="name" value="{{old('name')}}"/>
                               <x-c-input type="text" label="Slogan : " name="slug" id="slug" value="{{old('slug')}}"/>
                               <x-c-input type="text" label="Description : " name="description" id="description" value="{{old('description')}}"/>


                               <x-c-input type="file" label="Image : " name="thumbnail" id="thumbnail" value="{{old('thumbnail')}}"/>

                                <div class="mb-3">
                                    <label for="brand_id" class="form-label">
                                        Marque:
                                    </label>
                                        <select name="brand_id" id="brand_id" class="form-select w-100">
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                </div>

                               <div class="form-check mb-3">
                                   <input class="form-check-input" type="checkbox" @checked(old('enabled')) value="1" name="enabled" id="enabled">
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


            <form action="" method="GET" id="cform">
                <label for="filter_brand" class="form-label">
                    Filtrer par marque :
                </label>
                <select name="id" id="id" class="form-select w-100" onchange="(function(){cform.submit()})()">
                    <option value="">Selectionner une Marque</option>
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}" @selected(request('id') == $brand->id)>{{$brand->name}}</option>
                    @endforeach
                </select>
            </form>


            <!-- Start Table -->

        <div class="table-responsive mt-6">
            <table class="table table-striped align-middle text-center">
            <thead>

                <tr>
                    <td>Image</td>
                    <td>Type</td>
                    <td>Nom</td>
                    <td>Slogan</td>
                    <td>Marque</td>
                    <td>Active</td>
                    <td>Action</td>
                </tr>

                </thead>

                <tbody>

                    @foreach($devices as $device)

                        <tr>
                            <td>
                                <img src="{{asset('storage/' . $device->thumbnail)}}" width="30" alt="Logo-{{$device->name}}">
                            </td>
                            <td>{{$device->brand->name}}</td>
                            <td>{{$device->name}}</td>
                            <td>{{$device->slug}}</td>


                            <td>{{$device->device_type->name ?? "Vide"}}</td>
                            <td>{{$device->enabled ? "Oui" : "No"}}</td>

                            <td>
                                <div class="btn-group gap-1 " role="group" aria-label="Basic example">
                                    <a href="{{route('devices.edit',$device->id)}}" class="btn rounded-sm btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                    <button type="submit" form="delete-device-{{$device->id}}" class="btn rounded-sm btn-primary"><i class="bi bi-trash-fill"></i></button>
                                </div>

                                <form action="{{route('devices.destroy',$device->id)}}" id="delete-device-{{$device->id}}"  method="POST" onsubmit="return confirm('es-tu sûr ?')">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>

                    @endforeach

            </tbody>
            </table>

            {{$devices->links()}}

        </div>



    </div>
@endsection
