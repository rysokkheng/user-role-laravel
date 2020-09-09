@extends('layouts.app')


@section('content')
   


    <form action="{{ route('tests.update',$test->id) }}" method="POST">
    	@csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name1:</strong>
                    <input type="text" name="t1" class="form-control" value="{{ $test->t1 }}"  placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name2:</strong>
                    <input type="text" name="t2" class="form-control" value="{{ $test->t2 }}" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name3:</strong>
                    <input type="text" name="t3" class="form-control" value="{{ $test->t3 }}" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name4:</strong>
                    <input type="text" name="t4" class="form-control" value="{{ $test->t4 }}" placeholder="Name">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection