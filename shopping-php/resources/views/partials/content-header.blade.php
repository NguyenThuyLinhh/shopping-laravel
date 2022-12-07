<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            {{-- truyền 2 tham số name và key vào --}}
          <h1 class="m-0">{{ $name . ' ' . $key }}</h1>
          {{-- kết quả show ra ở phần content header của add là Cartegory Add --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ $name }}</a></li>
            <li class="breadcrumb-item active">{{ $key }}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->