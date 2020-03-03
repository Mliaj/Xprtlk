@extends('dashboard.account')

@section('content-title')
    Edit
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item active">Profile</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#personalDet" data-toggle="tab">Personal Details</a></li>
            <li class="nav-item"><a class="nav-link" href="#accountPref" data-toggle="tab">Account Preferences</a></li>
            </ul>
        </div><!-- /.card-header -->

        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="personalDet">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Profile Picture</label>
                            <div class="col-sm-10">
                                <div class="text-center">
                                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                                    <h6>Upload a different photo...</h6>

                                    <input type="file" class="ml-5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Firstname</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="first_name" placeholder="Firstname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Lastname</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control"  name="last_name" placeholder="Lastname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Position</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="position" placeholder="Position" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contact No.</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="contact" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Expertise</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="" placeholder="Expertise" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Field</label>
                            <div class="col-sm-10">
                                <input class="form-control" placeholder="Field" name="field" rows="10" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bio</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Enter bio here..." name="bio" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success float-right">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Account Preferences --}}
                <div class="tab-pane" id="accountPref">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Change Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Delete Account</label>
                            <div class="col-sm-10">
                                <input class="btn btn-danger" data-toggle="modal" data-target="#modal-default" type="button" value="Delete my account">
                                <span class="text-warning"> Warning: this action is irreversible.</span>
                            </div>
                        </div>

                        {{-- Modal --}}
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Delete Your Account</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure you want to delete your account?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->

                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success float-right">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
