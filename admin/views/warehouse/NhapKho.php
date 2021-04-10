<?php

	include_once 'controllers/users/crud-employee.php';
	include '../db/Connection.php';
	$result = mysqli_query($conn,"SELECT * FROM phieunhap");
	// $edit = mysqli_query($conn,"SELECT * FROM employee WHERE id='" . $_GET['id'] . "'");
    // $rowe= mysqli_fetch_array($edit);

    
?>


<div class="content-page">
	<!-- Start content -->
	<div class="content">
	<h5 class="text-center text-success" id="message"><?= $success ;?> <?= $update ;?> <?= $delete; ?></h5>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<h4 class="header-title m-t-0 m-b-30">Thông Tin Phiếu Nhập Kho</h4>

						<div class="row">
							<div class="col-sm-6">
								<div class="m-b-30">
									<label for="">Search: <input type="search" class="form-control input-sm"
											placeholder="Name" aria-controls="datatable-editable"></label>
								</div>


							</div>
							<div class="col-sm-6">
							<a href="index.php?ctrl=warehouse/TaoPhieuNhap" class="btn btn-success" data-toggle="modal"><i
										class="fal fa-plus"></i> <span>Thêm Phiếu Nhập Kho</span></a>
							</div>
						</div>
						<div class="table">
							<table id="mainTable" class="table table-striped m-b-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Mã Phiếu</th>
										<th>Tên Nhà Cung Cấp</th>
										<th>Trạng Thái</th>
										<th>Thanh Toán</th>
                                        <th>Nhập Kho</th>
										<th>Tổng Tiền</th>
										<th>Nhân Viên Kho</th>
                                        <th>Ngày Nhập Kho</th>
									</tr>
								</thead>
								<tbody>
									<?php
                					while($row = mysqli_fetch_array($result))
                					{
                					?>
									<tr>
										<td>
											<?php echo $row["ID"]; ?>
										</td>
										<td>
											<?php echo $row["MaPhieu"]; ?>
										</td>
										<td>
                                            <?php echo $row["TenNCC"]; ?>
										</td>
										<td>
											<?php echo $row["TrangThai"]; ?>
										</td>
										<td>
											<?php echo $row["ThanhToan"]; ?>
										</td>
										<td>
											<?php echo $row["NhapKho"]; ?>
										</td>
                                        <td>
											<?php echo $row["TongTien"]; ?>
										</td>
                                        <td>
											<?php echo $row["NhanVienKho"]; ?>
										</td>
                                        <td>
											<?php echo $row["NgayNhapKho"]; ?>
										</td>
										<td >
										<a href="#editEmployeeModal" class="btn btn-success" data-toggle="modal"
												data-toggle="tooltip" title="Edit"><i class="far fa-eye"></i></a>
												
										</td>
									</tr>
										<?php 
                   					 } 
                						?>
									
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div><!-- end col -->
		</div>
		<!-- end row -->
		<!-- Add Modal HTML -->
		<div id="addEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
					 <h4 class="modal-title">Add Employee</h4>
                </div>
					<div class="modal-body">
					<form method="post" >
						<div class="modal-body">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="id"  placeholder="Enter ID" required>
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name"  placeholder="Enter Name" required>
							</div>
							<div class="form-group">
								<label>Hình Ảnh</label>
								<input type="file" class="form-control" name="picture" required></input>
							</div>
							<div class="form-group">
								<label>PassWord</label>
								<input class="form-control" name="password"  placeholder="Enter PassWord"
									required></input>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email"  placeholder="Enter email"
									required>
							</div>

							<div class="form-group">
								<label>Position</label>
								<input type="text" class="form-control" name="position" placeholder="Enter Position"
									required>
							</div>
						</div>
						<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-success" name="add" value="Add">
						</div>
					</form>
					</div>
					
				</div>
			</div>
		</div>

		<div id="editEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
					 <h4 class="modal-title">Edit Employee</h4>
                </div>
					<div class="modal-body">
					<form method="POST" >
						<div class="modal-body">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="id" id="id"  placeholder="Enter ID" required>
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name"  placeholder="Enter Name" required>
							</div>
							<div class="form-group">
								<label>Hình Ảnh</label>
								<input type="file" class="form-control" name="picture" required></input>
							</div>
							<div class="form-group">
								<label>PassWord</label>
								<input class="form-control" name="password"  placeholder="Enter PassWord"
									required></input>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email"  placeholder="Enter email"
									required>
							</div>

							<div class="form-group">
								<label>Position</label>
								<input type="text" class="form-control" name="position" placeholder="Enter Position"
									required>
							</div>
						</div>
						<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-info" name="save" value="Save">
						</div>
					</form>
					</div>
					
				</div>
			</div>
		</div>
 </div> 



	</div> <!-- container -->

</div> <!-- content -->




</body>
</html>