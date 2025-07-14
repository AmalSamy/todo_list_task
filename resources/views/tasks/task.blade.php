<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>قائمة المهام اليومية</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      direction: rtl;
    }
    .task-complete {
      text-decoration: line-through;
      color: gray;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white text-center">
          <h4>قائمة المهام اليومية</h4>
        </div>
        <div class="card-body">
          <form id="taskForm" class="row g-2 mb-3" method="POST" action="{{route('tasks.posttask')}}">
           @csrf
            <div class="col-md-6">
              <input name="task" type="text" id="taskInput" class="form-control" placeholder="أدخل المهمة">
            </div>
            <div class="col-md-4">
              <input name="date" type="date" id="taskDate" class="form-control">
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-success w-100">إضافة</button>
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
