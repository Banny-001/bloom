<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __(' Add Bouquet') }} --}}
          Edit Bouquet
        </h2>
        <h4>
            <a href="{{url('bouquet')}}" class="btn btn-primary float-end" type="button"> Add Bouquet</a>
        </h4> 
        {{-- <a href="" class="btn btn-primary float-end" type="button" style="inline-flex"> Add Bouquet</a> --}}
       
  
    </x-slot>
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                
                   <div  class="alert alert-success">{{session('status')}}</div>
                @endif

                <div class='card'>
                    {{-- <div class="card-header">
                        <h4>
                            <a href="{{url('bouquet')}}" class="btn btn-primary float-end" type="button"> Add Bouquet</a>
                        </h4> 
                    </div> --}}
                    <div class="card-body">
                        <form action="{{url('bouquet/'.$bouquet->id.'/edit')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$bouquet->name}}"/>
                                @error('name')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea  name="description"  class="form-control" rows="3" {{$bouquet->description}}></textarea>
                                @error('description')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control" value="{{$bouquet->amount}}" />
                                @error('amount')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Is Active</label>
                                {{-- error here --}}
                                <input type="checkbox" name="is_active"  {{ $bouquet->is_active ==true? 'checked':'' }} />
                                @error('is_active')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
    
    
    
</x-app-layout>