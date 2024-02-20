<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post" id="up">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Educational Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">

                        <x-form.input title="Degree Name" id="up_deg_name" name="up_deg_name" type="text"
                            placeholder="" />

                    </div>
                    <div class="mb-3">

                        <x-form.input title="Institute Name" id="up_inst_name" name="up_inst_name" type="text"
                            placeholder="" />

                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Start date</label>
                        <input type="number" id="up_start" name="up_start" min="1900" max="2099"
                            step="1" value="2016" />
                    </div>
                    <div class="mb-3">

                        <label for="name" class="form-label">End Date</label>
                        <input type="number" id="up_end" name="up_end" min="1900" max="2099" step="1"
                            value="2016" />
                    </div>

                    <div class="mb-3">

                        <x-form.textarea title="Description" id="up_des" name="up_des" row="10"
                            placeholder=" I'm confident at...." />

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_edu">Update </button>
                </div>
            </div>
        </div>
    </form>
</div>
