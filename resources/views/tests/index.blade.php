@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
               
                <a class="btn btn-success" href="{{ route('tests.create') }}"> Create New Product</a>
             
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>T1</th>
            <th>T2</th>
            <th>T3</th>
            <th>T4</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($test as $tes)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $tes->t1 }}</td>
	        <td>{{ $tes->t2 }}</td>
            <td>{{ $tes->t3 }}</td>
            <td>{{ $tes->t4 }}</td>
	        <td>
                    <a class="btn btn-info" href="">Show</a>
                    <a class="btn btn-primary" href="{{ route('tests.edit',$tes->id) }}">Edit</a>

                    <button type="submit" class="btn btn-danger">Delete</button>

	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $test->links() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection