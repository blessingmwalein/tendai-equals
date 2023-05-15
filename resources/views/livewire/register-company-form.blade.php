<form action="" class="p-3" id="contact-form" data-toggle="validator" novalidate="true">
    <div class="messages"></div>
    {{-- display flashed messages to session --}}
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="row controls">
        <div class="col-6">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Company Name</label>
                <input type="text" placeholder="" wire:model="company_name" style="border-radius:10px"
                    name="name">
                @error('company_name')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror

            </div>
        </div>
        <div class="col-6">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Website Name</label>
                <input type="text" placeholder="" wire:model="website_name" style="border-radius:10px"
                    name="name">
                @error('website_name')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Email</label>
                <input type="email" placeholder="" wire:model="email" style="border-radius:10px" name="name">
                @error('email')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Phone Number</label>
                <input type="number" placeholder="" wire:model="phone_number" style="border-radius:10px"
                    name="name">
                @error('phone_number')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Contact Person Name</label>
                <input type="text" placeholder="" wire:model="contact_person" style="border-radius:10px"
                    name="name">
                @error('contact_person')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="input-group-meta form-group mb-30 has-error has-danger">
                <label>Industry</label>
                <select class="form-control" wire:model="industry" id="exampleFormControlSelect1">
                    <option>Industry 1</option>
                    <option>Industry 1</option>
                    <option>Industry 1</option>
                    <option>Industry 1</option>
                    <option>Industry 1</option>
                </select>
                @error('industry')
                    <span class="error">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                <div class=" d-flex justify-content-between align-items-center">
                    <input style="width:20px" wire:model="quality_assurance" type="checkbox" id="remember">
                    <label for="remember" class="ml-2" style="margin-left:15px;margin-top:5px">Tick if you have
                        Quality
                        Assurance Team</label>
                    @error('quality_assurance')
                        <span class="error">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

            </div> <!-- /.agreement-checkbox -->
        </div>
        <div class="col-12">
            <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                <div class=" d-flex justify-content-between align-items-center">
                    <input type="checkbox" wire:model="terms" id="terms" style="width:20px">
                    <label for="terms" class="ml-2" style="margin-left:15px;margin-top:5px">Terms &
                        Conditions</label>
                </div>

            </div> <!-- /.agreement-checkbox -->
        </div>

        <div class="col-12 mb-4"><button type="button" wire:click="submit" style="border-radius:10px"
                class="btn-eight ripple-btn ">Submit</button></div>


    </div>
</form>
