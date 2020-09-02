@extends('employees.layouts')

@section('content')

<div class ="row mt-5">
    <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>ข้อมูลพนักงาน</h2></div>
      <div class = "float-right">
      <a href="{{ route('employees.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>
      </div>
    </div>
  </div>
    <hr/>
    <div class="card ">
        <div class="card-header ">
          <h5>รายละเอียด</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">ชื่อ : {{ $employee->name }}</h6>
          <h6 class="card-title">นามสกุล : {{ $employee->lastname }}</h6>
          <h6 class="card-text">อายุ : {{ $employee->age }}</h6>
          <h6 class="card-text">วันเกิด : {{ $employee->birthday }}</h6>
          <h6 class="card-text">ตำแหน่ง : {{ $employee->position }}</h6>
        </div>
     </div>

@endsection