@include('layout.head')
@include('layout.header')
@include('layout.sidebar')
<div class="content-body">
    <div class="container-fluid">

        {{-- <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Unit</a></li>

            </ol>
        </div> --}}

        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <button type="submit" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">Cari Unit</button>
                    @include('unit.modal.search')
                    <div class="card-header">
                        <h4 class="card-title">Daftar Unit</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Unit</th>
                                        <th>Tipe</th>
                                        <th>IP</th>
                                        <th>Versi APK</th>
                                    </tr>
                                </thead>
                                <tbody style="color: black">
                                    @foreach ($unit as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no_unit }}</td>
                                        <td>{{ $item->tipe }}</td>
                                        <td>{{ $item->ip }}</td>
                                        <td>{{ $item->versi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>No Unit</th>
                                        <th>Tipe</th>
                                        <th>IP</th>
                                        <th>Versi APK</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
