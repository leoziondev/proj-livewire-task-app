@section('title', 'Tasks')
<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800 font-weight-bold">Tasks</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#createTask">
            <i class="fas fa-plus mr-1"></i>
            Add Task
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
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Asign User</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Learn Javascript</td>
                                    <td><div class="badge bg-light">pending</div></td>
                                    <td>Jhon Doe</td>
                                    <td class="text-right">
                                        <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#updateTask">
                                            <i class="far fa-edit"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Learn Javascript</td>
                                    <td><div class="badge bg-light">pending</div></td>
                                    <td>Jhon Doe</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Learn Javascript</td>
                                    <td><div class="badge bg-light">pending</div></td>
                                    <td>Jhon Doe</td>
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
    <div class="modal fade" id="createTask" tabindex="-1" aria-labelledby="createTaskLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="createTaskLabel">Create Task</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="">Choose Category</option>
                                <option value="">Category 01</option>
                                <option value="">Category 02</option>
                                <option value="">Category 03</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="">Choose status</option>
                                <option value="">Pending</option>
                                <option value="">Started</option>
                                <option value="">In Progress</option>
                                <option value="">Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="date_start">Start Date</label>
                            <input type="date" name="date_start" class="form-control" />
                        </div>
                        <div class="col">
                            <label for="date_end">End Date</label>
                            <input type="date" name="date_end" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user">Asign User</label>
                        <select name="user" class="form-control">
                            <option value="">Choose user</option>
                            <option value="">user 01</option>
                            <option value="">user 02</option>
                            <option value="">user 03</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create Task</button>
                </div>
            </form>
          </div>
        </div>
    </div>
    {{-- Update Category --}}
    <div class="modal fade" id="updateTask" tabindex="-1" aria-labelledby="updateTaskLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="updateTaskLabel">Update Task</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="category">Category</label>
                            <select name="category" class="form-control">
                                <option value="">Choose Category</option>
                                <option value="">Category 01</option>
                                <option value="">Category 02</option>
                                <option value="">Category 03</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <option value="">Choose status</option>
                                <option value="">Pending</option>
                                <option value="">Started</option>
                                <option value="">In Progress</option>
                                <option value="">Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="date_start">Start Date</label>
                            <input type="date" name="date_start" class="form-control" />
                        </div>
                        <div class="col">
                            <label for="date_end">End Date</label>
                            <input type="date" name="date_end" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user">Asign User</label>
                        <select name="user" class="form-control">
                            <option value="">Choose user</option>
                            <option value="">user 01</option>
                            <option value="">user 02</option>
                            <option value="">user 03</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-light border-0">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Update Task</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>

