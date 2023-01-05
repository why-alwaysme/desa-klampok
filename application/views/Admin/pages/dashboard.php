               <!-- Begin Page Content -->
               <div class="container-fluid">
                   <div class="card shadow">
                       <div class="card-header">
                           <h6 class="m-0 font-weight-bold text-success">Dashboard</h6>
                       </div>

                       <div class="card-body">
                           <!-- Content Row -->
                           <div class="row">
                               <div class="col-xl-3 col-md-6 mb-4">
                                   <div class="card border-left-primary shadow h-100 py-2">
                                       <div class="card-body">
                                           <div class="row no-gutters align-items-center">
                                               <div class="col mr-2">
                                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                       Data Posyandu</div>
                                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?> Pendaftar</div>
                                               </div>
                                               <div class="col-auto">
                                                   <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-xl-3 col-md-6 mb-4">
                                   <div class="card border-left-danger shadow h-100 py-2">
                                       <div class="card-body">
                                           <div class="row no-gutters align-items-center">
                                               <div class="col mr-2">
                                                   <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                       Jumlah Artikel</div>
                                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $artikel; ?> Artikel</div>
                                               </div>
                                               <div class="col-auto">
                                                   <i class="fas fa-pen-fancy fa-2x text-gray-300"></i>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>

               </div>
               <!-- /.container-fluid -->