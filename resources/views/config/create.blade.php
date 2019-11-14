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

                            <form action="/make" class="form-horizontal" method="POST">
                                {{ csrf_field() }} {{ method_field('POST') }}
                                <tr>
                                    <td><input type="integer" class="form-control" id="value" name="value"
                                               placeholder="Nhập giá trị"></td>
                                    <td>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module" value="1">
                                                <label class="form-check-label">Quản lý giỏ hàng, thanh toán</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module" value="2">
                                                <label class="form-check-label">Quản lý tài khoản</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module" value="">
                                                <label class="form-check-label">Quản lý sản phẩm</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Quản lý đơn hàng</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Quảng cáo - khuyến mãi, khuyến
                                                    mại</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Liên kết với dữ liệu bán hàng</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Chăm sóc khách hàng</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Tìm kiếm, phân tích, thống kê</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Quản lý giao hàng</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="module">
                                                <label class="form-check-label">Quản lý kho, logistic</label>
                                            </div>
                                        </div>
                                        {{--                                        <select multiple name="module" class="form-control">--}}
                                        {{--                                            <option value="1">Quản lý giỏ hàng, thanh toán</option>--}}
                                        {{--                                            <option value="2">Quản lý tài khoản</option>--}}
                                        {{--                                            <option value="3">Quản lý sản phẩm</option>--}}
                                        {{--                                            <option value="4">Quản lý đơn hàng</option>--}}
                                        {{--                                            <option value="5">Quảng cáo - khuyến mãi, khuyến mại</option>--}}
                                        {{--                                            <option value="6">Liên kết với dữ liệu bán hàng</option>--}}
                                        {{--                                            <option value="7">Chăm sóc khách hàng</option>--}}
                                        {{--                                            <option value="8">Tìm kiếm, phân tích, thống kê</option>--}}
                                        {{--                                            <option value="9">Quản lý giao hàng</option>--}}
                                        {{--                                            <option value="10">Quản lý kho, logistic</option>--}}
                                        {{--                                        </select>--}}
                                    </td>

                                    <!-- checkbox -->


                                    <td>
                                        <a href="/home" class="btn btn-secondary btn-sm">Hủy</a>
                                        <button type="submit" class="btn btn-primary btn-sm" name='submit'
                                                value="Save Changes" style="margin:5px">Tạo
                                        </button>
                                        {{--                                        <input type="submit" value="Save Changes" class="btn btn-success float-right sm">--}}

                                    </td>
                                </tr>

                                {{--                                <td class="text-right py-0 align-middle">--}}
                                {{--                                    <div class="btn-group btn-group-sm">--}}
                                {{--                                        <a href="/config/update" class="btn btn-info"><i class="fas fa-eye"></i></a>--}}
                                {{--                                        <a href="/config/delete" class="btn btn-danger"><i--}}
                                {{--                                                    class="fas fa-trash"></i></a>--}}
                                {{--                                    </div>--}}
                                {{--                                </td>--}}
                            </form>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">

        </div>
    </section>
@endsection