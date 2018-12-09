<?php $__env->startSection('content'); ?>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Daftar Piket</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Piket</li>
        </ol>
    </div>
</div>


<div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="modal-body">
                Saya bersedia untuk mendapatkan jadwal piket dari salah satu opsi yang diberikan.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="#"><button type="button" class="btn btn-primary">Simpan</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bentrok" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Bentrok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-material" action="<?php echo e(route('user.tambahAgenda')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <select class="form-control" required name="opsi">
                                    <option disabled selected>pilih opsi bentrok</option>
                                    <?php $__currentLoopData = $data['hari']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($hari['kode'] != 5): ?>
                                        <option value="<?php echo e($hari['key']); ?>"><?php echo e($hari['hari']); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: -10px;">
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" placeholder="Alasan bentrok" name="alasan" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: -10px">
                        <div class="col-md-12">
                            <input class="form-check-input" type="checkbox" id="check" required>
                            <label class="form-check-label" for="check" style="font-size: 12px">
                                          <p>Saya mengisi form tersebut dengan sungguh-sungguh.</p>
                                        </label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>
        </div>
    </div>
</div>


<div class="row">
    <?php if(!isset($data['hasil']['konfirmasi']) || $data['hasil']['konfirmasi'] == '-'): ?>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <p class="breadcrumb-item active">
                            <h6>Kamu akan mendapatkan jadwal piket dari salah satu opsi berikut :</h6>
                            <?php $__currentLoopData = $data['hari']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($hari['key']); ?>"><?php echo e($hari['hari']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <center class="m-t-20"><a href="#" class="btn waves-effect waves-light btn-success btn-block" data-toggle="modal"
                                        data-target="#accept"> Lanjutkan!</a></center>
                            </div>
                            <div class="col-12">
                                <center class="m-t-5">atau</center>
                            </div>
                            <div class="col-12">
                                <center class="m-t-5"><a href="#" class="btn waves-effect waves-light btn-danger btn-block" data-toggle="modal"
                                        data-target="#bentrok">Ada yang bentrok :(</a></center>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-12">

    <?php if(isset($data['agenda'][0])): ?>
        <div class="card">
            <div class="card-body">
                <h4>Jadwal bentrok</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Sesi</th>
                                <th>Alasan</th>
                                <th>Status</th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>

                        <form action="">
                            <?php $__currentLoopData = $data['agenda']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $agenda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i+1); ?></td>
                                <?php if($agenda['id_sesi'] == '1A'): ?>
                                <td>Senin, 09.30 - 11.10</td>
                                <?php elseif($agenda['id_sesi'] == '2A'): ?>
                                <td>Selasa, 09.30 - 11.10</td>
                                <?php elseif($agenda['id_sesi'] == '3A'): ?>
                                <td>Rabu, 09.30 - 11.10</td>
                                <?php elseif($agenda['id_sesi'] == '4A'): ?>
                                <td>Kamis, 09.30 - 11.10</td>
                                <?php elseif($agenda['id_sesi'] == '5A'): ?>
                                <td>Jumat, 09.30 - 11.10</td>
                                <?php elseif($agenda['id_sesi'] == '1B'): ?>
                                <td>Senin, 11.10 - 12.50</td>
                                <?php elseif($agenda['id_sesi'] == '2B'): ?>
                                <td>Selasa, 11.10 - 12.50</td>
                                <?php elseif($agenda['id_sesi'] == '3B'): ?>
                                <td>Rabu, 11.10 - 12.50</td>
                                <?php elseif($agenda['id_sesi'] == '4B'): ?>
                                <td>Kamis, 11.10 - 12.50</td>
                                <?php elseif($agenda['id_sesi'] == '5B'): ?>
                                <td>Jumat, 11.10 - 12.50</td>
                                <?php elseif($agenda['id_sesi'] == '1C'): ?>
                                <td>Senin, 12.50 - 14.30</td>
                                <?php elseif($agenda['id_sesi'] == '2C'): ?>
                                <td>Selasa, 12.50 - 14.30</td>
                                <?php elseif($agenda['id_sesi'] == '3C'): ?>
                                <td>Rabu, 12.50 - 14.30</td>
                                <?php elseif($agenda['id_sesi'] == '4C'): ?>
                                <td>Kamis, 12.50 - 14.30</td>
                                <?php elseif($agenda['id_sesi'] == '5C'): ?>
                                <td>Jumat, 12.50 - 14.30</td>
                                <?php elseif($agenda['id_sesi'] == '1D'): ?>
                                <td>Senin, 14.30 - 16.10</td>
                                <?php elseif($agenda['id_sesi'] == '2D'): ?>
                                <td>Selasa, 14.30 - 16.10</td>
                                <?php elseif($agenda['id_sesi'] == '3D'): ?>
                                <td>Rabu, 14.30 - 16.10</td>
                                <?php elseif($agenda['id_sesi'] == '4D'): ?>
                                <td>Kamis, 14.30 - 16.10</td>
                                <?php elseif($agenda['id_sesi'] == '5D'): ?>
                                <td>Jumat, 14.30 - 16.10</td>
                                <?php elseif($agenda['id_sesi'] == '1E'): ?>
                                <td>Senin, 15.20 - 17.10</td>
                                <?php elseif($agenda['id_sesi'] == '2E'): ?>
                                <td>Selasa, 15.20 - 17.10</td>
                                <?php elseif($agenda['id_sesi'] == '3E'): ?>
                                <td>Rabu, 15.20 - 17.10</td>
                                <?php elseif($agenda['id_sesi'] == '4E'): ?>
                                <td>Kamis, 15.20 - 17.10</td>
                                <?php elseif($agenda['id_sesi'] == '5E'): ?>
                                <td>Jumat, 15.20 - 17.10</td>

                                <?php endif; ?>

                                <td><?php echo e($agenda['agenda']); ?></td>

                                <?php if($agenda['status'] == '0'): ?>
                                <td>Waiting</td>
                                <?php elseif($agenda['status'] == '1'): ?>
                                <td>Confirmed</td>
                                <?php else: ?>
                                <td>Rejected</td>
                                <?php endif; ?>
                                    <td><center><a href="<?php echo e(route('user.hapusAgenda', $agenda['id'])); ?>" class="btn waves-effect waves-light btn-danger btn-sm"><i class="fa fa-remove"></i></a></center></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
                <p>Note :</br>> Agenda dengan status Waiting akan tetap masuk dalam rekomendasi jadwal piket. Pastikan agenda anda telah dikonfirmasi sebelum melanjutkan!
                </br>> Silahkan hubungi admin jika keberatan dengan keputusan tersebut.</p>
                </div>
            </div>

        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <h4>Jadwal Kuliah</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                
                                <th>Mata Kuliah</th>
                                <th>Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data['jadwal']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index+1); ?></td>
                                <td><?php echo e($data->hari); ?></td>
                                <td><?php echo e($data->jam); ?></td>
                                
                                <td><?php echo e($data->matkul); ?></td>
                                <td><?php echo e($data->ruang); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php elseif($data['hasil']['konfirmasi'] == 1): ?>
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <center class="m-t-10">
                    <p class="fa fa-check" style="font-size: 40px;"></p>
                    <h6>Pendaftaran piket telah berhasil dilakukan,</br>nantikan pengumumannya tanggal xx-xx-20xx :)</br></br>
                        <h6>Jika ada pertanyaan silahkan hubungi ...</h6>
                        </br>#OpenSourceOpenMind</h6>
                </center>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>