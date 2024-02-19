<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post" id="add">
        @csrf
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="errMsgContainer">

                </div> --}}

                    <div class="mb-3">

                        <x-form.input title="Title" id="title" name="title" type="text" placeholder="" />
                        <div class="titleError errors d-none"></div>

                    </div>
                    <div class="mb-3">

                        <x-form.textarea title="Description" id="des" name="des" row="10"
                            placeholder=" I'm confident at...." />
                        <div class="DesError errors d-none"></div>

                    </div>
                    <div class="mb-3">
                        <x-form.input title="Full Name" id="name" name="fullname" type="text" placeholder="" />
                        <div class="nameError errors d-none"></div>
                    </div>
                    <div class="mb-3">

                        <label for="date" class="form-label"> BithDate</label>

                        <input type="date" id="date" name="date">
                        <div class="birthdateError errors d-none"></div>
                    </div>

                    <div class="mb-3">
                        <x-form.input title="Graduation" id="deg" name="degree" type="text" placeholder="" />
                        <div class="degreeError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Phone No" id="phnno" name="phnno" type="text" placeholder="" />
                        <div class="phnnoError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Address" id="add" name="add" type="text" placeholder="" />
                        <div class="addressError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="E-mail" id="email" name="email" type="email"
                            placeholder="abc@gmail.com" />
                        <div class="emailError errors d-none"></div>
                    </div>
                    <div class="mb-3">
                        <x-form.input title="Upload File" id="file" name="file" type="file" placeholder="" />
                        <div class="imageError errors d-none"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_details">Save </button>
                </div>
            </div>
        </div>
</div>
