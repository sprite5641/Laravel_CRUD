@extends('employees.layouts')

@section('content')

    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>รายชื่อพนักงาน</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('employees.create') }}" class="btn btn-success">เพิ่มข้อมูล</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5>{{ $message }}</h5>
        </div>

    @endif

    <hr />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>จัดการ</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($employees as $employee)

                <tr>              
                    <td>{{ ++$i }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">ดูข้อมูล</a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">แก้ไข</a>
                            @csrf


                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">
                                ลบ
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4 class="text-danger">ยืนยันการลบข้อมูลหรือไม่!!!</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">ยกเลิก</button>
                                            @method('DELETE')
                                            <button class="btn btn-danger">ลบ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
    {!! $employees->links() !!}
@endsection
