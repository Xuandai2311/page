<?php

	include_once 'controllers/product/crud-product.php';
	include '../db/Connection.php';
	$result = mysqli_query($conn,"SELECT * FROM products");
	// $edit = mysqli_query($conn,"SELECT * FROM product WHERE id='" . $_GET['id'] . "'");
    // $row= mysqli_fetch_array($edit);

    
?>


<div class="content-page">
	<!-- Start content -->
	<div class="content">
	<h5 class="text-center text-success" id="message"><?= $success ;?> <?= $update ;?> <?= $delete; ?></h5>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<h4 class="header-title m-t-0 m-b-30">Thông Tin Sản Phẩm</h4>

						<div class="row">
							<div class="col-sm-6">
								<div class="m-b-30">
									<label for="">Search: <input type="search" class="form-control input-sm"
											placeholder="Name" aria-controls="datatable-editable"></label>
								</div>


							</div>
							<div class="col-sm-6">
								<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
										class="fal fa-plus"></i> <span>Add New Product</span></a>
							</div>
						</div>
						<div class="table">
							<table id="mainTable" class="table table-striped m-b-0">
								<thead>
									<tr>
										<th>ID</th>
										<th class="name">Tên Sản Phẩm</th>
										<th>Giảm Giá</th>
										<th>Giá Bán</th>
										<th class ="picture">Hình Ảnh</th>
										<th class="description">Mô Tả</th>
                                        <th>Hàng Động</th>
									</tr>
								</thead>
								<tbody>
									<?php
                					while($row = mysqli_fetch_array($result))
                					{
                					?>
									<tr>
										<td>
											<?php echo $row["id"]; ?>
										</td>
										<td>
											<?php echo $row["name_product"]; ?>
										</td>
										<td>
											<?php echo $row["discount"]; ?>
										</td>
										<td>
											<?php echo $row["price"]; ?>
										</td>
										<td>
											
                                            <img src="../public/images/<?php echo $row['picture'] ?>" height="80" width="80" alt="">
										</td>
                                        <td>
											<?php echo $row["description"]; ?>
										</td>
										<td class="actions">
											<a href="#editEmployeeModal" class="btn btn-success" data-toggle="modal"
												data-toggle="tooltip" title="Edit"><i href="#editEmployeeModal" class="fal fa-pencil-alt"></i></a>
											<a  href="index.php?ctrl=product/product&id=<?php echo $row["id"] ?>" class="btn btn-success" data-toggle="modal"
												data-toggle="tooltip" title="Delete"><i  class="fas fa-trash"></i></a>
										</td>
									</tr>
										<?php 
                   					 } 
                						?>
									<?php
					// close connection database
										mysqli_close($conn);
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
					<form method="post" >
						<div class="modal-header">
							<h4 class="modal-title">Thêm Sản Phẩm Mới</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="id"  placeholder="Enter ID" required>
							</div>
							<div class="form-group">
								<label>Tên Sản Phẩm</label>
								<textarea type="text" class="form-control" name="name_product"  placeholder="Enter Name Product" required></textarea>
							</div>
							<div class="form-group">
								<label>Giảm Giá</label>
								<input type="text" class="form-control" name="discount"  placeholder="Enter Discount"
									required></input>
							</div>
							<div class="form-group">
								<label>Giá Bán</label>
								<input type="text" class="form-control" name="price"  placeholder="Enter Price"
									required></input>
							</div>
							<div class="form-group">
								<label>Hình Ảnh</label>
								<input type="file" class="form-control" name="picture" 
									required></input>
							</div>

							<div class="form-group">
								<label>Mô Tả</label>
								<textarea type="text" class="description form-control" name="description" placeholder="Enter Description"
									required></textarea>
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
		<!-- Edit Modal HTML -->
		<div id="editEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post">
						<div class="modal-header">
							<h4 class="modal-title">Sửa Sản Phẩm</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="id"  placeholder="Enter ID" required>
							</div>
							<div class="form-group">
								<label>Tên Sản Phẩm</label>
								<textarea type="text" class="form-control" name="name_product"  placeholder="Enter Name Product" required></textarea>
							</div>
							<div class="form-group">
								<label>Giảm Giá</label>
								<input type="text" class="form-control" name="discount"  placeholder="Enter Discount"
									required></input>
							</div>
							<div class="form-group">
								<label>Giá Bán</label>
								<input type="text" class="form-control" name="price"  placeholder="Enter Price"
									required></input>
							</div>
							<div class="form-group">
								<label>Hình Ảnh</label>
								<input type="file" class="form-control" name="picture" 
									required></input>
							</div>

							<div class="form-group">
								<label>Mô Tả</label>
								<textarea type="text" class="description form-control" name="description" placeholder="Enter Description"
									required></textarea>
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
		<!-- Delete Modal HTML -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" name="delete" value="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> <!-- container -->

</div> <!-- content -->

<script>
	$(document).ready(function () {
		setTimeout(function () {
			$('#message').hide();
		}, 2000);
	});
</script>
</body>
</html>