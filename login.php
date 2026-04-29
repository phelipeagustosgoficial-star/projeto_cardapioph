<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/logincadastro.css">
</head>
<body>
    <main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                
                <div class="card p-4">
                    <h2 class="text-center mb-4">Login</h2>
                    
                    <form>
                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" placeholder="Digite sua senha">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="lembrar">
                            <label class="form-check-label" for="lembrar">Lembrar de mim</label>
                        </div>

                        <button type="submit" class="btn btn-login w-100 fw-bold">Entrar</button>

                        <div class="text-center mt-3">
                            <a href="cadastro.html" class="link-custom">Criar conta</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>