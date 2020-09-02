@extends('employees.layouts')

@section('content')
<div class="row mt-5">
    <div class= "col-lg-12 margin-tb">
        <div class = "pull-left"><h2>แก้ไขข้อมูลพนักงาน</h2></div>
        <div class = "float-right">
        <a href="{{ route('employees.index')}}" class = "btn btn-danger"> กลับหน้าหลัก</a>
        </div>
  </div> 
</div>
@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
<li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
  
  <hr/>
<form action=" {{ route('employees.update',$employee->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">ชื่อ</label>
          <input type="text" class="form-control" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">นามสกุล</label>
          <input type="text" class="form-control" name="lastname" value="{{ $employee->lastname }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">อายุ</label>
            <input type="text" class="form-control" name="age" value="{{ $employee->age }}">
          </div>
          <div class="form-group">
            <label for="example-date-input">วันเกิด</label>
            <div class="col-13">
              <input class="form-control" type="date" value="2020-01-01" name="birthday" value="{{ $employee->birthday }}">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ตำแหน่ง</label>
            <input type="text" class="form-control" name="position" value="{{ $employee->position }}">
          </div>
        <button type="submit" class="btn btn-primary">ตกลง</button>
      </form>
      @endsection