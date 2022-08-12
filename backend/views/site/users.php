<?php

use backend\controllers\SiteController;

/** @var $data SiteController*/


$this->title ='Foydalanuvchilar';

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                       <tr>
                           <th>N</th>
                           <th>Ism Familya</th>
                           <th>Email</th>
                           <th>Telefon</th>
                           <th>More</th>
                       </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach ($data as $item): ?>
                       <tr>
                           <td><?= $i++?></td>
                           <td><?= $item['username']?></td>
                           <td><?= $item['email']?></td>
                           <td><?= $item['status']?></td>
                           <td>
                               <a href="#"><i class="fa fa-eye btn btn-info"></i></a>
                           </td>

                       </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>









