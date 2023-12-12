<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Admin</title>

		<!-- Site favicon -->
		<!-- <link
			rel="apple-touch-icon"
			sizes="180x180"
			href="public/admin/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="public/admin/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="public/admin/vendors/images/favicon-16x16.png"
		/> -->

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="public/admin/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="public/admin/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="public/admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="public/admin/src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="public/admin/vendors/styles/style.css" />
    
		
	</head>
	<body>
		

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<!-- <img src="vendors/images/photo1.jpg" alt="" /> -->
							</span>
							<span class="user-name">Admin</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="https://github.com/dropways/deskapp" target="_blank"
						><img src="vendors/images/github.svg" alt=""
					/></a>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
      <a href="<?=site_url('admin-dashboard');?>">
					<img src="public/images/mahaltalogoo.png" alt="" class="dark-logo" />
					<img
						src="public/images/mahaltalogoo.png"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
							<ul class="submenu">
								<li><a href="<?=site_url('admin-dashboard');?>">Dashboard</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="javascript:;" class="dropdown-toggle">
								<span class="micon bi bi-table"></span
								><span class="mtext">Hotel</span>
							</a>
							<ul class="submenu">
								<li><a href="<?=site_url('admin-roombooking');?>" class="active">Booking</a></li>
                				<li><a href="<?=site_url('admin-guest');?>">Guest</a></li>
								<li><a href="<?=site_url('admin-acceptance');?>">Acceptance</a></li>
								<li><a href="<?=site_url('admin-feedback');?>">Feedback</a></li>
								
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Booking</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap ">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 15px">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="Add">Add</button>
              </div>
              

                <!-- Modal structure -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=site_url('admin-insertroombooking');?>" method="POST">
                                    <!-- Recipient input field -->
                                    <div class="mb-3">
                                        <label class="col-form-label">Full Name:</label>
                                        <input type="text" class="form-control" 
                                        name="FullName" id="FullName" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Contact:</label>
                                        <input type="text" class="form-control" name="ContactNumber" id="ContactNumber">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Address:</label>
                                        <input type="text" class="form-control" 
                                        name="Address" id="Address">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Room Type:</label>
                                        <input type="text" class="form-control" name="RoomType" id="RoomType">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Check In:</label>
                                        <input
                                          class="form-control datetimepicker"
                                          placeholder="Choose Date and time"
                                          type="text"
                                          name="CheckinDate"
										  id="CheckinDate"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Check Out:</label>
                                        <input
                                          class="form-control datetimepicker"
                                          placeholder="Choose Date and time"
                                          type="text"
                                          name="CheckoutDate"
										  id="CheckoutDate"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Number of Guest:</label>
                                        <input type="text" class="form-control" name="NumberofGuest" id="NumberofGuest">
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Total Amount:</label>
                                        <input type="text" class="form-control" name="TotalAmount" id="TotalAmount">
                                    </div>
                                    <div class="modal-footer">
										<!-- Close button -->
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<!-- Send message button -->
										<button type="submit" class="btn btn-primary">Add</button>
									</div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
              
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Full Name</th>
										<th>Contact</th>
										<th>Address</th>
										<th>Room Type</th>
										<th>Number Of Guest</th>
										<th>Total Amount</th>
										<th>Check In</th>
										<th>Check Out</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
                					<?php foreach($books as $book):?>
									<tr>
										<td class="table-plus"><?=$book['FullName']?></td>
										<td><?=$book['ContactNumber']?></td>
										<td><?=$book['Address']?></td>
										<td><?=$book['RoomType']?></td>
										<td><?=$book['NumberofGuest']?></td>
										<td><?=$book['TotalAmount']?></td>
										<td><?=$book['CheckinDate']?></td>
										<td><?=$book['CheckoutDate']?></td>
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="admin-booking/edit/<?=$book['ReservationId'];?>"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="admin-booking/delete/<?=$book['ReservationId'];?>"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
  
			</div>
		</div>
		<script>
    // JavaScript to handle modal events
    const exampleModal = document.getElementById('exampleModal');

    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            const recipient = button.getAttribute('data-bs-whatever');
            
            // Update the modal's content
            const modalTitle = exampleModal.querySelector('.modal-title');
            const modalBodyInput = exampleModal.querySelector('.modal-body ');

            modalTitle.textContent = ` ${recipient}`;
            modalBodyInput.value = recipient;
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
		<!-- js -->
		<script src="public/admin/vendors/scripts/core.js"></script>
		<script src="public/admin/vendors/scripts/script.min.js"></script>
		<script src="public/admin/vendors/scripts/process.js"></script>
		<script src="public/admin/vendors/scripts/layout-settings.js"></script>
		<script src="public/admin/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="public/admin/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="public/admin/src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="public/admin/vendors/scripts/datatable-setting.js"></script>

		
	</body>
</html>
