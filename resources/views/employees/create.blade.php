@extends('employees.layouts')

@section('content')
<div class="row mt-5">
  <div class= "col-lg-12 margin-tb">
      <div class = "pull-left"><h2>เพิ่มรายชื่อพนักงาน</h2></div>
      <div class = "float-right">
      <a href="{{ route('employees.index')}}" class = "btn btn-danger">กลับหน้าหลัก</a>
      </div>
    </div>
</div> 
        @if($errors->any())
          <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            @foreach ($errors->all() as $error)
        <h5>{{ $error }}</h5>
            @endforeach

        </div>

        @endif
      
    

      <hr/>
    <form action=" {{ route('employees.store') }}" method="POST">
        @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">ชื่อ</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">นามสกุล</label>
              <input type="text" class="form-control" name="lastname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">อายุ</label>
                <input type="text" class="form-control" name="age">
              </div>
              <div class="form-group">
                <label for="example-date-input">วันเกิด</label>
                <div class="col-13">
                  <input class="form-control" type="date" value="2020-01-01" name="birthday">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ตำแหน่ง</label>
                <input type="text" class="form-control" name="position">
              </div>
            <button type="submit" class="btn btn-primary">ตกลง</button>
          </form>
    
@endsection

