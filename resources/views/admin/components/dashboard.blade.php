<main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        {{-- name --}}
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="row g-0 w-100">
                                            <div class="col-6">
                                                <div class="p-1 m-1">
                                                    <h4>Update Name</h4>
                                                    <div class="container-fluid-sm">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Name:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- role --}}
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="row g-0 w-100">
                                            <div class="col-6">
                                                <div class="p-1 m-1">
                                                    <h4>Update Role</h4>
                                                    <div class="container-fluid-sm">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Role:</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                        </div>
                                                    </div>
    
                                                </div>
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('css/admin/image/customer-support.jpg')}}" class="img-fluid illustration-img"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <!-- description -->
                     <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Update Description
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                              </div>
                        </div>
                    </div>


                  
                   
                </div>
                <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
            </main>
          