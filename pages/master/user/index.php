<?php 

$icon = "bxs-user-detail";
$layout = "dashboard";
$title = "User";
$content = "
<div class='row mt-4'>
    <div class='col-xl-12'>
        <div class='card border-0 shadow-sm rounded mb-4'>
            <div class='card-body'>
                <a href='?page=master-user-create' class='btn btn-light shadow text-success' style='padding-bottom:4px;' data-bs-toggle='tooltip' title='Tambah'><i class='bx bx-user-plus bx-sm'></i></a>
                <div class='mt-2'>
                    <table class='table table-bordered table-hover'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th width='20%'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>001</td>
                                <td>
                                    <a href='?page=master-user-edit&id=1' class='btn btn-light shadow text-warning' style='padding-bottom:4px;' data-bs-toggle='tooltip' title='Edit'><i class='bx bx-edit-alt bx-sm'></i></a>
                                    <a href='?page=master-user&delete=1' class='btn btn-light shadow text-danger' style='padding-bottom:4px;' data-bs-toggle='tooltip' title='Hapus'><i class='bx bx-user-x bx-sm'></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";