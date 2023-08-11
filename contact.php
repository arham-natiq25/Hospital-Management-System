
<form action="" method="post">
    <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Medical History
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Add Medical History</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="bp">Blood Pressure</label>
                    <input type="text" value="" name="bp" class="form-control" required>
                    <label for="bs">Blood Sugar</label>
                    <input type="text" value="" name="bs" class="form-control" required>
                    <label for="weight">Weight</label>
                    <input type="text" value="" name="weight" class="form-control" required>
                    <label for="bt">Body Tempreture</label>
                    <input type="text" value="" name="bt" class="form-control" required>
                    <label for="prescription">Prescription</label>
                    <textarea name="prescription" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>