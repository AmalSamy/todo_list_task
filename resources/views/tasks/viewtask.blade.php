<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>عرض المهام</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      direction: rtl;
    }
    .task-box {
      transition: 0.3s;
    }
    .task-box:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
          <h5>قائمة المهام</h5>
        </div>
          @foreach($tasks as $t)
         <div class="d-flex justify-content-between align-items-center border rounded p-3 mb-2 bg-white task-box">
         <div>
          <h6 class="mb-1">🔹 {{ $t->task }}</h6>
           <small class="text-muted">تاريخ: {{ $t->date }}</small>
         </div>
            <div>
              <a class="btn btn-sm btn-outline-primary me-1"href="{{route('tasks.task')}}">اضافة مهمة جديدة</a>
              <a class="btn btn-sm btn-outline-primary me-1"href="{{route('tasks.edit',$t->id)}}">تعديل</a>
              <a class="btn btn-sm btn-outline-danger"href="{{route('tasks.delete',$t->id)}}">حذف</a>


            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
