@extends('layouts.LTEapp')

@section('LTEcontent')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý hiển thị</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Xử lý</h3>
                        <a href="/create"><button type="button" class="btn btn-info float-right" >Tạo mới</button></a>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fas fa-minus">aaaaaaaaaaaa</i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Yêu cầu</th>
                                <th>Module</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                                @foreach($config as $singleConfig)--}}
                            {{--                                    <tr>--}}
                            {{--                                        <td>{{$singleConfig->value}}</td>--}}
                            {{--                                        <td><select multiple class="form-control">--}}
                            {{--                                                <option>option 1</option>--}}
                            {{--                                                <option>option 2</option>--}}
                            {{--                                                <option>option 3</option>--}}
                            {{--                                                <option>option 4</option>--}}
                            {{--                                                <option>option 5</option>--}}
                            {{--                                            </select></td>--}}
                            {{--                                        <td class="text-right py-0 align-middle">--}}
                            {{--                                            <div class="btn-group btn-group-sm">--}}
                            {{--                                                <a href="/config/update" class="btn btn-info"><i class="fas fa-eye"></i></a>--}}
                            {{--                                                <a href="/config/delete" class="btn btn-danger"><i--}}
                            {{--                                                            class="fas fa-trash"></i></a>--}}
                            {{--                                            </div>--}}
                            {{--                                        </td>--}}
                            {{--                                    </tr>--}}
                            {{--                                @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
        </div>
    </section>
@endsection