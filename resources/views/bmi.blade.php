<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg p-4">
                    <h2 class="text-center mb-4">BMI Calculator</h2>
                    
                    <form action="{{ route('bmi.calculate') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight (kg)</label>
                            <input type="number" step="0.1" class="form-control" name="weight" required>
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label">Height (cm)</label>
                            <input type="number" step="0.01" class="form-control" name="height" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Calculate BMI</button>
                    </form>

                    @if (isset($bmi))
                        <div class="alert alert-info mt-4 text-center">
                            <h4>Your BMI: {{ number_format($bmi, 2) }}</h4>
                            <p class="fw-bold">{{ $category }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
