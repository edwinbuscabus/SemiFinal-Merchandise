<div class="col-md-6">
    @if (count($errors)> 0)

    <div class="card">
       <div class="card-body bg-danger text-white">
          Please field the following:
          <ul>
             @foreach ($errors->all() as $err)
             <li>{{$err}}</li>
                 
             @endforeach
          </ul>
       </div>
    </div>    
    @endif