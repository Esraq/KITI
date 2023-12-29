@extends('layouts.super_admin')

@section('content')


<div id="page-inner">
<div class="row">
                    <div class="col-md-12">
                     <h2>Super Admin Dashboard</h2>
                        <h5>Welcome {{ Auth::user()->name }} , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />

			</div>






@endsection