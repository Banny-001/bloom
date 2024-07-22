{{-- @extends('layouts.app') --}}

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Bouquet') }} --}}
            Furniture
        </h2>
        <h4>
            <a href="{{url('bouquet/create')}}" class="btn btn-primary float-end" type="button"> Add products</a>
        </h4>
        {{-- <a href="" class="btn btn-primary float-end" type="button" style="inline-flex"> Add Bouquet</a> --}}
       
  
    </x-slot>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class='card'>
                    {{-- <div class="card-header">
                        <h4>
                            <a href="{{url('bouquet/create')}}" class="btn btn-primary float-end" type="button"> Add Bouquet</a>
                        </h4> 
                    </div> --}}
                    <div class="card-body">
                        {{-- {{$bouquets}} --}}
                        <table class="table table-striped">
                              <thead>
                                <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Is Active</th>
                                <th>Action</th>
                                <tr>
                              </thead>
                              <tbody>
                            @foreach($bouquets as $item)
                               <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>
                                        @if($item->is_active)
                                            {{-- {{$item->is_active}} --}}
                                            Active
                                        @else
                                         In-Active

                                        @endif



                                    </td>
                                    <td>
                                        <a href="{{url('bouquet/'.$item->id.'/edit')}}"  class="btn btn-success mx-1">Edit</a>
                                        <a href="{{url('bouquet/'.$item->id.'/delete')}}" class="btn btn-danger mx-1"
                                            onclick="return confirm('Are you sure?')" >
                                            Delete
                                        </a>
                                    </td>
                               </tr>
                             @endforeach
                              </tbody>
                          </table>


                    </div>

                </div>

            </div>
        </div>

    </div>
    
    
    
</x-app-layout>


