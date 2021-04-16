<!-- Judul Halaman -->
<div class="row wrapper white-bg page-heading">
   <div class="head-konten">
      <h3><i class="fa fa-folder-open fa-fw"></i> <?= $_judul; ?></h3>

      <a href="<?= site_url('admin/'.$this->_ctrl); ?>" class="btn btn-success btn-sm">
         <i class="fa fa-arrow-left fa-lg fa-fw"></i> KEMBALI
      </a>
   </div>
</div>

<!-- Konten Halaman -->
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-md-2 col-sm-5">
         <?php $foto = ($result['foto']) ? $result['foto'] : 'unknown.jpg'; ?>
         <img src="<?= base_url('foto/'.$foto); ?>" style="width: 100%" />
      </div>
      <div class="col-md-4 col-sm-7">
         <div class="panel panel-default">
            <div class="panel-body">
               <h4>
                  Profil Customer
                  <a href="<?= site_url('admin/'.$this->_ctrl.'/form/'.$result[$this->_kunci]); ?>" class="btn btn-default btn-xs btn-aksi pull-right">
                     <i class="fa fa-pencil fa-fw text-warning"></i> EDIT
                  </a>
               </h4><br>
               <h4><b><i class="fa fa-database fa-fw text-warning"></i> Saldo : Rp. <?= hx_rupiah($result['saldo']); ?></b></h4>
               <hr>
               <table class="table-profil">
                  <tr>
                     <td class="labels" style="width: 60px">Nama</td>
                     <td>: <?= $result['nama']; ?></td>
                  </tr>
                  <tr>
                     <td class="labels">Email</td>
                     <td>: <?= $result['email']; ?></td>
                  </tr>
                  <tr>
                     <td class="labels">Nomor HP</td>
                     <td>: <?= $result['no_hp']; ?></td>
                  </tr>
                  <tr>
                     <td class="labels">Alamat</td>
                     <td>: <?= $result['alamat']; ?></td>
                  </tr>
                  <tr>
                     <td class="labels">Terdaftar</td>
                     <td>: <?= hx_tgl($result['tgl_daftar'],'d M Y'); ?></td>
                  </tr>
                  <tr>
                     <td class="labels">Terakhir Login</td>
                     <td>: <?= hx_tgl($result['login_terakhir'],'d M Y H:i'); ?></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="tabs-container">
            <ul class="nav nav-tabs">
               <li class="active"><a data-toggle="tab" href="#tab-2">Kendaraan <span class="badge badge-primary"><?= count($kendrn); ?></span></a></li>
               <li><a data-toggle="tab" href="#tab-1"> Order <span class="badge badge-warning"><?= count($order); ?></span></a></li>
            </ul>
            <div class="tab-content">
               <div id="tab-2" class="tab-pane active">
                  <div class="panel-body">
                     <?php if ($kendrn): ?>
                     <h4>Daftar Kendaraan</h4>
                     <div class="table-responsive">
                        <table class="table table-bordereds table-condensed table-stripeds table-hover">
                           <tbody>
                              <?php $no=1; foreach ($kendrn as $ls): ?>
                              <tr>
                                 <td class="text-center" style="width: 40px"><?= $no; ?>.</td>
                                 <td class="text-center" style="width: 70px">
                                    <img src="<?= base_url('gambar/'.$ls['gambar']); ?>" style="width: 100%" alt="" />
                                 </td>
                                 <td>
                                    <h5><?= $ls['tipe']; ?></h5>
                                    <?= $ls['no_polisi']; ?>
                                 </td>
                                 <td class="text-center" style="width: 60px">
                                    <?= ($ls['status']=='N') ? '<span class="label">Nonaktif</span>' : '<span class="label label-primary">Aktif</span>'; ?>
                                 </td>
                              </tr>
                              <?php $no++; endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <?php else: ?>
                     Belum ada data kendaraan.
                     <?php endif; ?>
                  </div>
               </div>
               <div id="tab-1" class="tab-pane">
                  <div class="panel-body">
                     <?php if ($order): ?>
                     <h4>Daftar Order</h4>
                     <div class="table-responsive">
                        <table class="table table-bordereds table-condenseds table-stripeds table-hover">
                           <tbody>
                              <?php $nox=1; foreach ($order as $list): ?>
                              <tr>
                                 <td class="text-center" style="width: 40px"><?= $nox; ?>.</td>
                                 <td><?= hx_tgl($list['wkt_order'],'d M Y'); ?></td>
                                 <td><?= $list['kendaraan']; ?></td>
                                 <td>Rp. <?= hx_rupiah($list['total_biaya']); ?></td>
                                 <td><span class="label label-<?= $warna[$list['status']]; ?>"><?= $list['status']; ?></span></td>
                                 <td>
                                    <a href="<?= site_url('admin/order/view/'.$list['id_order']); ?>" class="btn-aksi tip" title="Lihat Detail Order">
                                       <i class="fa fa-search fa-lg text-primary"></i>
                                    </a>
                                 </td>
                              </tr>
                              <?php $nox++; endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <?php else: ?>
                     Belum ada data order.
                     <?php endif; ?>
                  </div>
               </div>
            </div>
        </div>
      </div>
   </div>
</div>