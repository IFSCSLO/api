<!doctype html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>API IFSC</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">



  <!-- Bootstrap core CSS -->
  <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">



  <!-- Custom styles for this template -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>

  <div class="col-lg-8 mx-auto pb-3 py-md-5">
    <header class="d-flex align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">

        <span class="fs-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclude" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z" />
          </svg>
          API Projeto Integrador IFSC

        </span>
      </a>
    </header>
    
    <main>
    <p class="fs-6 col-md-8">API para listagem de informações cadastrados em Banco de Dados MySQL</p>
      
      <hr class="col-3 col-md-2 mb-5">
      <div class="row g-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Endpoint Categoria</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Descrição</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>idcategoria</td>
                    <td>Código da categoria</td>
                  </tr>
                  <tr>
                    <td>nome</td>
                    <td>Nome da categoria</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-success fs-4">GET</span> Listar todas as categorias</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/categorias</span>
              <span class="card-text">http://localhost/api/public/categorias{ID}</span>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-info fs-4">POST</span> Insere categorias no banco</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/categorias</span>
              <hr/>
              <p class="text-light bg-dark">Exemplo</p>
              <div class="p-3">{<br>                
                "nome": "Nome da categoria"<br>
                }
              
            </div>
            </div>
          </div>
          <p></p>

          <div class="card">
            <div class="card-header">
              <p><span class="text-warning fs-4">PUT</span> Atualiza registros de acordo com o ID</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/categorias/{id}</span>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-danger fs-4">DELETE</span> Deleta registros de acordo com o ID</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/categorias/{id}</span>
            </div>
          </div>
        </div>

        <!--NOVO CARD-->

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h4>Endpoint Fotos</h4>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Campo</th>
                    <th scope="col">Descrição</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>idfoto</td>
                    <td>Código do registro da foto</td>
                  </tr>
                  <tr>
                    <td>idcategoria</td>
                    <td>ID da categoria</td>
                  </tr>
                  <tr>
                    <td>nome</td>
                    <td>Nome da foto</td>
                  </tr>
                  <tr>
                    <td>descricao</td>
                    <td>Descrição da foto</td>
                  </tr>
                  <tr>
                    <td>data</td>
                    <td>Data do cadastro da foto</td>
                  </tr>
                  <tr>
                    <td>foto_nova</td>
                    <td>Caminho/pasta da foto no servidor</td>
                  </tr>
                  <tr>
                    <td>foto_antiga</td>
                    <td>Caminho/pasta da foto no servidor</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-success fs-4">GET</span> Lista as fotos</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/fotos</span>
              <span class="card-text">http://localhost/api/public/fotos{ID}</span>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-info fs-4">POST</span> Insere foto no banco</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/fotos</span>
              <hr/>
              <p class="text-light bg-dark">Exemplo</p>
              <div class="p-3">{<br>
                "idcategoria": 2,<br>
                "nome": "Nome da foto",<br>
                "descricao": "Descrição da foto",<br>
                "data": "2021-09-08",<br>
                "foto_atual": "caminho/foto/id_foto_atual",<br>
                "foto_antiga": "caminho/foto/id_foto_antiga"<br>
                }</div>
              
            </div>
          </div>
          <p></p>

          <div class="card">
            <div class="card-header">
              <p><span class="text-warning fs-4">PUT</span> Atualiza dados de acordo com o ID repassado</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/fotos/{id}</span>
            </div>
          </div>
          <p></p>
          <div class="card">
            <div class="card-header">
              <p><span class="text-danger fs-4">DELETE</span> Deleta registo de acordo com o ID</p>
            </div>
            <div class="card-body">
              <span class="card-text">http://localhost/api/public/fotos/{id}</span>
            </div>
          </div>
        </div>
      </div>

    </main>
    <footer class="pt-5 my-5 text-muted border-top">
      IFSC Câmpus São Lourenço do Oeste
    </footer>
  </div>




</body>

</html>