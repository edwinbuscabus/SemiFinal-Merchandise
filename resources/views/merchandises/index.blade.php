@extends('pages.base')


@section('content')
    
@include('pages.info')

<div class="containerfluid">
    <div class="row">
        <div class="col-md-12">

            <div class="add float-right">
            <a href="{{url('merchandises/create')}}" class="btn btn-primary">Add New</a>
            </div>

            <h1>Merchandises</h1>

            <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($merchandises as $m): ?>
                        <tr>
                            <td><?= $m->id ?> </td>
                            <td><?= $m->name ?> </td>
                            <td><?= $m->description ?> </td>
                            <td><?= $m->quantity ?> </td>
                            <td><?= $m->price ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection