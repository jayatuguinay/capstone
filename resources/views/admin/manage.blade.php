@extends('admin.layout')
@section('content')
<div class="container mt-3 shadow p-5 bg-light">
   <div class="row justify-content-center">
        <div class="col-md-5 shadow bg-white p-2">
            <h3 class="text-center"><b>MANAGE ACCOUNTS</b></h3>
        </div>
    </div>

    <div class="row justify-content-center mt-3 mb-3">
        <div class="col-md-5 p-4 bg-light shadow rounded">
            <h4 class="text-center text4"><b>MANAGE SECURITY ACCOUNT</b></h4>
            <button class="btn bg1 btn-sm mt-3 bg3 w-100 text3 shadow" data-bs-toggle="modal" data-bs-target="#createPasswordModal">CREATE NEW PASSWORD</button>
            <p class="text4">Create password for security personnel</p>
            <button class="btn btn-sm mt-3 w-100 bg5 text3 shadow" data-bs-toggle="modal" data-bs-target="#deletePasswordModal">DELETE PASSWORD</button>
            <p class="text4">Delete password for security personnel</p>  
        </div>
        <div class="col-md-1">

        </div>
        <div class="col-md-5 bg-light shadow rounded p-4">
            <h4 class="text-center text4"><b>MANAGE ADMIN ACCOUNT</b></h4>
            <button class="btn bg1 btn-sm mt-3 bg1s w-100 text3 shadow" data-bs-toggle="modal" data-bs-target="#CreateAccountModal">CREATE NEW ACCOUNT</button>
              <p class="text4">Create new account for Administrator</p>
              <button class="btn bg1 btn-sm mt-3 bg3 w-100 text3 shadow" id="createadmin" data-bs-toggle="modal" data-bs-target="#DeletAccountModal">DELETE ACCOUNT</button>
              <p class="text4">Delete the current account</p>  
        </div>
    </div>
    <div class="row justify-content-center mt-1">
        <div class="col-md-6"> 
        </div>
        <div class="col-md-5 bg-light shadow rounded p-2">
            <p class="text4">Logout here</p>
            <button  id="logout" class="btn btn-warning w-100 btn-sm" type="button">Logout</button>

        </div>
    </div>
</div>

@endsection
