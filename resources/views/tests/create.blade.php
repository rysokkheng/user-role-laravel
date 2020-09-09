@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tests.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('test.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name1:</strong>
		            <input type="text" name="t1" class="form-control" placeholder="Name">
		        </div>
                <div class="form-group">
                    <strong>Name2:</strong>
                    <input type="text" name="t2" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name3:</strong>
                    <input type="text" name="t3" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name4:</strong>
                    <input type="text" name="t4" class="form-control" placeholder="Name">
                </div>
		    </div>
		    
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection