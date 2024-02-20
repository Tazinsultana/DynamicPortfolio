<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post" id="update_id">
        @csrf
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Your Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="errMsgContainer">

                </div> --}}

                    <div class="mb-3">

                        <x-form.input title="Title" id="up_title" name="up_title" type="text" placeholder="" />
                        <div class="titleError errors d-none"></div>

                    </div>
                    <div class="mb-3">

                        <x-form.textarea title="Description" id="up_des" name="up_des" row="10"
                            placeholder=" I'm confident at...." />
                        <div class="DesError errors d-none"></div>

                    </div>
                    <div class="mb-3">
                        <x-form.input title="Full Name" id="up_name" name="up_fullname" type="text"
                            placeholder="" />
                        <div class="nameError errors d-none"></div>
                    </div>
                    <div class="mb-3">

                        <label for="date" class="form-label"> BithDate</label>

                        <input type="date" id="up_date" name="up_date">
                        <div class="birthdateError errors d-none"></div>
                    </div>

                    <div class="mb-3">
                        <x-form.input title="Graduation" id="up_deg" name="up_degree" type="text"
                            placeholder="" />
                        <div class="degreeError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Phone No" id="up_phnno" name="up_phnno" type="text" placeholder="" />
                        <div class="phnnoError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Address" id="up_add" name="up_add" type="text" placeholder="" />
                        <div class="addressError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="E-mail" id="up_email" name="up_email" type="email"
                            placeholder="abc@gmail.com" />
                        <div class="emailError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Upload File" id="up_file" name="up_file" type="file" placeholder="" />
                        <div class="imageError errors d-none"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary up_details">Update </button>
                </div>
            </div>
        </div>
    </form>
</div>
