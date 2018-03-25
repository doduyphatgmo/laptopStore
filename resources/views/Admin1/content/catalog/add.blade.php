@extends('Admin1.index')
@section('content')
<div class="page-wrapper">
   <div class="container-fluid">
<div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4> Form add </h4>

                            </div>

                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif

                            @if(session('notification'))
								<div class="alert alert-success">
									{{session('notification')}}
								</div>
                            @endif
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="admin/catalog/postAdd" method="post">
                                    	<input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="name">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection