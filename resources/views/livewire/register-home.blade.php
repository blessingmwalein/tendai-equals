<form id="contact-form" style="padding-left:35px;padding-right:35px">

    <div class="messages"></div>
    <div class="row controls">
        <div class="col-12">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Website Name*</label>
                <input type="text" wire:model="website_name" name="website_name" placeholder=""
                    style="border-radius:10px" name="name" required="required"
                    data-error="Website name is required.">

            </div>
        </div>

        <div class="col-12 d-flex flex-row-reverse mb-4"><button type="button" wire:click="submit"
                style="border-radius:10px" class="btn-eight ripple-btn ">Start
                Test</button></div>
        <div class="col-12 ">
            <a href="register-company" style="border-radius:10px; width:280px" class="btn-eight ripple-btn ">Register
                Your
                Company</a>
        </div>
        <div class="col-12 mt-3">
            <a href="register-tester" style="border-radius:10px;width:280px" class="btn-eight ripple-btn ">Register As A
                tester</a>
        </div>

    </div>
</form>
