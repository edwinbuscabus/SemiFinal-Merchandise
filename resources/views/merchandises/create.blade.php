@extends('pages.base')

@section('content')
    
<h1>Create new user</h1>

   <div class="row">
       <div class="col-md-6">
        {!! Form::open(['url'=>'/merchandises', 'method'=>'post']) !!}

      <div class="form-group"> 
         {{Form::label('name', 'Full Name')}}
         {{Form::text('name', null,['class'=>'form-control'])}}
      </div>

        <div class="form-group"> 
            {{Form::label('description', 'Merchandise')}}
            {{Form::text('description', null,['class'=>'form-control'])}}
         </div>

         <div class="form-group"> 
            {{Form::label('quantity', 'Quantity of Merchandises')}}
            {{Form::text('quantity', null,['class'=>'form-control'])}}
         </div>

         <div class="form-group"> 
            {{Form::label('price', 'Price for Merchandise')}}
            {{Form::text('price', null,['class'=>'form-control'])}}
         </div>

         <div class="form-group">
            <button class="btn btn-primary float-right">Add New</button>
            </div>
            
        {!! Form::close() !!}
       </div>

       @include('pages.errors')
      </div>
   </div>
@endsection