               <!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Content Row -->
                   <div class="row">

                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-success shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Jumlah Pesanan</div>
                                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?></div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-cart-plus fa-2x text-success"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-info shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesanan diproses
                                           </div>
                                           <div class="row no-gutters align-items-center">
                                               <div class="col-auto">
                                                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $diproses; ?></div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-box-open fa-2x text-primary"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card border-left-warning shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Pesanan Tertunda</div>
                                           <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ditunda; ?></div>
                                       </div>
                                       <div class="col-auto">
                                           <i class="fas fa-spinner fa-2x text-warning"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- Content Row -->
               </div>
               <!-- /.container-fluid -->