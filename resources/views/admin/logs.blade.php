@extends('admin.layout')
@section('content')
<div class="container bg-light mt-2 mb-2shadow">
    <div class="row p-3">
        <div class="col-md-12 text-center" style="border-radius:50px;">
            <h5 class="text-black text-center">ACTIVITY LOGS</h5>
        </div>
    </div>
</div>
<div class="container bg-light mb-5 shadow">

            <div class="row justify-content-center mt-4">
                <div class="col-md-10 bg-light mb-4 mt-4 shadow">
                    <button class="btn btn-light btn-sm shadow mt-3" id="exitprint" style="width: 150px;" title="Print">
                        <i class="bi bi-printer" style="font-size: 1.5em;"></i> Generate Report
                    </button>
                    <table class="table table-striped table-bordered text-light mt-4">
                        <tr class="text-uppercase">
                            <th class="w-50">
                                User
                            </th>
                            <th class="w-20">
                                Activity <!--Delete, createed, delete secu, create new secu, logged out, logged in, generated a report-->
                            </th>
                            <th class="w-10">
                                Date
                            </th>
                            <th class="w-10">
                                Time
                            </th>
                        </tr>
        
                        <tr>
                            <td>
                                admin1 <!--pati mga secu may logs din parang aduit taril-->
                            </td>
                            <td>
                                logged in
                            </td>
                            <td>
                                2024/4/24
                            </td>
                            <td>
                                10:11:05 AM
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
</div>

@endsection
