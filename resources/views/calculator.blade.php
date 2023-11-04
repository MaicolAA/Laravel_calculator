<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-md">
        <h1>Calculator</h1>
        <form method="POST" action="/calculate" class="mx-auto p-3 border rounded shadow">
            @csrf
            <input type="text" name="num1" placeholder="Número 1" class="form-control">
            <input type="text" name="num2" placeholder="Número 2" class="form-control">
            <select name="operator" class="form-control">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        @if(isset($result))
        <p class="text-center">Resultado: {{ $result }}</p>
        @endif
    </div>
</body>
</html>
