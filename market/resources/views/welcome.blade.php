<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>marketsaya</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @livewireStyles
    </head>


    <div>
        <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
    <!-- Links -->
         <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/barang' )}}">Manajemen Barang</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/transaksi' )}}">Transaksi</a>
             </li>
         </ul>
    </div>
    </nav>

    <body>
        
   
        <div class="container mt-4">
          <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                        SELAMAT DATANG
                     </div>
                      <div class="card-body">
                          <h4 class="card-title">Market</h4>
                          @isset($slot)
                            @if($slot)
                                 {{ $slot }}
                             @endif
                            @endisset

                        </div>
                 </div>
              </div>
            </div>
         </div>

    </body>

    @livewireScripts
    </div>

</html>