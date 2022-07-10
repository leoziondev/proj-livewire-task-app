@section('title', 'Users')
<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800 font-weight-bold">Users</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#createUser">
            <i class="fas fa-plus mr-1"></i>
            Add User
        </button>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow border-0">
                <div class="card-header bg-white border-b-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <button class="btn btn-secondary btn-sm mr-2">
                                <i class="far fa-file-pdf mr-1"></i>
                                Pdf
                            </button>
                            <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-print mr-1"></i>
                                Print
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Jhon Doe</td>
                                    <td>jhon@email.com</td>
                                    <td>(11) 99999-5544</td>
                                    <td class="text-right">
                                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#updateUser">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Jhon Doe</td>
                                    <td>jhon@email.com</td>
                                    <td>(11) 99999-5544</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Jhon Doe</td>
                                    <td>jhon@email.com</td>
                                    <td>(11) 99999-5544</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="d-flex justify-content-between">
                <div>
                    <p>Showing 15 of 156 results</p>
                </div>
                <div class="flex">
                    <button class="btn btn-outline-primary btn-sm">Prev</button>
                    <button class="btn btn-outline-primary btn-sm">1</button>
                    <button class="btn btn-outline-primary btn-sm">2</button>
                    <button class="btn btn-outline-primary active btn-sm">3</button>
                    <button class="btn btn-outline-primary btn-sm">4</button>
                    <button class="btn btn-outline-primary btn-sm">Next</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Create Category --}}
    <div class="modal fade" id="createUser" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="createUserLabel">Create User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create User</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    {{-- Update Category --}}
    <div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="updateUserLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="updateUserLabel">Update User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Update User</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>


