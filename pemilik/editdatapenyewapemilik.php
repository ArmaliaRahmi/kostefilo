<?php
require 'sidebar3.php';
require 'bootstrap.html';
?>

<div class="content-container">
    <div class="container-fluid">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5 mt-3">
                        <h2 class="heading-section">PENYEWA</h2>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                        <div class="table-responsive">
                        <table class="contact-table table table-curved">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">Kmr</th>
                                    <th class="text-center">Nama Lengkap</th>
                                    <th class="text-center">Asal</th>
                                    <th class="text-center">WA</th>
                                    <th class="text-center">Lembaga</th>
                                    <th class="text-center">Act</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>01</td>
                                    <td style="color #5C8E9E">Akis Aga Punta Dewa</td>
                                    <td>Bogor</td>
                                    <td>0812-9876-4322</td>
                                    <td>UGM - Teknik Pertanian</td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td style="color #5C8E9E">Anggito Satya</td>
                                    <td>Solo</td>
                                    <td>0812-3445-2222</td>
                                    <td>UGM - Teknik Mesin</td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td style="color #5C8E9E"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td style="color #5C8E9E">Riyansyah Ramdha</td>
                                    <td>Bandung</td>
                                    <td>0878-3949-0898</td>
                                    <td>UNY - Teknik Elektro</td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td style="color #5C8E9E">Riyansyah Ramdha</td>
                                    <td>Bandung</td>
                                    <td>0878-3949-0898</td>
                                    <td>UNY - Teknik Elektro</td>
                                    <td>
                                    <a href="editdatapenyewapemilik.php" class="edit"><i class="far fa-edit" style="color: #5C8E9E" data-toggle="tooltip" title="Edit"></i></a>
								    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" style="color: #DE3B3B" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                                </tr>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Hapus Data Penyewa</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Anda yakin ingin menghapus daya penyewa?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
        </section>
    </div>
</div>

<style>
.table-curved {
 border-collapse: separate;
 border: solid black 2px;
 border-radius: 30px;
 border-left: 0px;
 border-top: 0px;
}
table.table-curved > thead > tr > th{
 border:2px solid black;
}
table.table-curved > tbody > tr > td{
 border:2px solid black;
}
.table-curved > thead:first-child > tr:first-child > th {
 border-bottom: 2px;
 border-top: solid black 2px;
}
.table-curved td, .table-curved th {
 border-left: 2px solid black;
 border-top: 2px solid black;
}
.table-curved > :first-child > :first-child > :first-child {
 border-top-left-radius: 30px;
}
.table-curved > :first-child > :first-child > :last-child {
 border-top-right-radius: 30px;
}
.table-curved > :last-child > :last-child > :first-child {
 border-bottom-left-radius: 30px;
}
.table-curved > :last-child > :last-child > :last-child {
 border-bottom-right-radius: 30px;
}
.content-container {
 padding-top: 50px;
 padding-left: 220px;
}
/* Modal styles */
.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: white;
		border-radius: 0 0 0 0;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
