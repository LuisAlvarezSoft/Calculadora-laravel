<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Elegante</title>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 2rem;
        }

        .calculator-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            transform: translateZ(0);
            backdrop-filter: blur(10px);
        }

        h1 {
            color: var(--dark);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5em;
            letter-spacing: -1px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary);
            font-weight: 600;
        }

        input, select {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--light);
            border-radius: 0.75rem;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        button {
            width: 100%;
            padding: 1.2rem;
            background: var(--secondary);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            background: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .resultado {
            margin-top: 2rem;
            padding: 1.5rem;
            background: var(--light);
            border-radius: 0.75rem;
            text-align: center;
            font-size: 1.5em;
            font-weight: 700;
            color: var(--accent);
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .calculator-container {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>Calculadora</h1>
        
        <form method="POST" action="/calcular">
            @csrf

            <div class="form-group">
                <label for="a">Número A</label>
                <input type="number" id="a" name="a" required 
                       placeholder="Ingrese el primer número">
            </div>

            <div class="form-group">
                <label for="b">Número B</label>
                <input type="number" id="b" name="b" required 
                       placeholder="Ingrese el segundo número">
            </div>

            <div class="form-group">
                <label for="operacion">Operación</label>
                <select id="operacion" name="operacion">
                    <option value="sumar">Sumar (+)</option>
                    <option value="restar">Restar (-)</option>
                    <option value="multiplicar">Multiplicar (×)</option>
                    <option value="dividir">Dividir (÷)</option>
                </select>
            </div>

            <button type="submit" id="btn-calcular">Calcular</button>
        </form>

        @isset($resultado)
            <div class="resultado">
                Resultado: {{ $resultado }}
            </div>
        @endisset
    </div>
</body>
</html>