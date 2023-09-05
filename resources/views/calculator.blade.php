<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form action="{{ route('calculate') }}" method="POST">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
        <input type="number" name="num1" placeholder="Angka pertama" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Angka kedua" required>
        <button type="submit">Hitung</button>
    </form>
    @if(isset($result))
        <p>Hasil: {{ $result }}</p>
    @endif
</body>
</html>
