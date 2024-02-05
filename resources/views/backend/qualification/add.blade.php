<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Educational Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">

                    <x-form.input title="Degree Name" name="deg_name" type="text" placeholder="" />

                </div>
                <div class="mb-3">

                    <x-form.input title="Institute Name" name="inst_name" type="text" placeholder="" />

                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Start date</label>
                    <input type="number" min="1900" max="2099" step="1" value="2016" />
                </div>
                <div class="mb-3">

                    <label for="name" class="form-label">End Date</label>
                    <input type="number" min="1900" max="2099" step="1" value="2016" />
                </div>

                <div class="mb-3">

                    <x-form.textarea title="Description" id="des" name="des" row="10"
                        placeholder=" I'm confident at...." />

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save </button>
            </div>
        </div>
    </div>
</div>
