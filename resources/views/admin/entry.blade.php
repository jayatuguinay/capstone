@extends('admin.layout')
@section('content')
<!--EXAMPLE LANG ITO, CHANGE MO NA LANG NA DATA TABLE NA GANITO-->

<div class="container-fluid mt-5 bg-light shadow">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-2 p-2 bg3 shadow rounded">
            <h2 class="text-center text3">HISTORY OF ENTRY</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-10 bg-light shadow mb-4">
            <button class="btn btn-light btn-sm shadow" id="entryprint" style="width: 150px;" title="Print">
                <i class="bi bi-printer" style="font-size: 1.5em;"></i> Generate Report
            </button>
            <table class="table table-striped table-bordered text-light mt-4">
                <tr class="text-uppercase">
                    <th class="w-50">
                        Name
                    </th>
                    <th class="w-20">
                        Plate number
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
                        Juan Dela Cruz
                    </td>
                    <td>
                        GGH8 77U8
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