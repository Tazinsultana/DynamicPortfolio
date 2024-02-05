<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">

                    <x-form.input title="Title" name="title" type="text" placeholder="" />

                </div>
                <div class="mb-3">

                    <x-form.textarea title="Description"  id="des" name="des" row="10" placeholder=" I'm confident at...." />

                </div>
                <div class="mb-3">
                    <x-form.input title="Full Name" name="fullname" type="text" placeholder="" />
                </div>
                <div class="mb-3">
                    {{-- <label for="name" class="form-label">Date</label> --}}
                    {{-- <input type="text" class="form-control" id="name" name="name"> --}}
                    <label for="date" class="form-label">Date</label>
                    {{-- <input id="update_date" name="date" autocomplete="false"
                        class="form-control date-picker"> --}}
                        <div class="col-5">
                            <div class="input-group date" id="datepicker">
                              <input type="text" class="form-control" id="date"/>
                              <span class="input-group-append">
                                <span class="input-group-text bg-light d-block">
                                  <i class="fa fa-calendar"></i>
                                </span>
                              </span>
                            </div>
                          </div>

                </div>
                <div class="mb-3">
                    <x-form.input title="Graduation" name="degree" type="text" placeholder="" />
                </div>
                <div class="mb-3">
                    <x-form.input title="Phone No" name="phn_no" type="text" placeholder="" />
                </div>
                <div class="mb-3">
                    <x-form.input title="Address" name="address" type="text" placeholder="" />
                </div>
                <div class="mb-3">
                    <x-form.input title="E-mail" name="email" type="email" placeholder="abc@gmail.com" />
                </div>
                <div class="mb-3">
                    <x-form.input title="Upload File" name="file" type="file" placeholder="" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save </button>
            </div>
        </div>
    </div>
</div>
