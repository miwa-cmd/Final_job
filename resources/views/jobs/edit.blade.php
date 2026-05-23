<!DOCTYPE html>
<html>
<head>
    <title>Edit Job</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Edit Job</h1>

    <form method="POST" action="/jobs/update/{{ $job->id }}">

        @csrf

        <div class="mb-3">
            <label>Title</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $job->title }}">
        </div>

        <div class="mb-3">
            <label>Description</label>

            <textarea name="description"
                      class="form-control">{{ $job->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Company</label>

            <input type="text"
                   name="company"
                   class="form-control"
                   value="{{ $job->company }}">
        </div>

        <div class="mb-3">
            <label>Location</label>

            <input type="text"
                   name="location"
                   class="form-control"
                   value="{{ $job->location }}">
        </div>

        <div class="mb-3">
            <label>Salary</label>

            <input type="number"
                   name="salary"
                   class="form-control"
                   value="{{ $job->salary }}">
        </div>

        <button class="btn btn-primary">
            Update Job
        </button>

    </form>

</div>

</body>
</html>