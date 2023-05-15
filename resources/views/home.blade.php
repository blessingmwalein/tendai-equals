<x-guest-layout>
{{-- style="background-image:url(images/home_second.jpg);background-size: 60% 100%;background-repeat: no-repeat;" --}}
    <div class="hero-banner-five"  >
        <div class="container"  >
            <div class="row" >
                <div class="col-8">
                    <img src="images/home_second.jpg" alt="" style="width:100%;border-radius:20px"
                        class="main-illustration" />

                </div>
                <div class="col-xxl-4 col-md-7"
                    style="border-radius:20px;padding:10px;box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;">
                    <div class="form-style-one">
                        <h3 class="form-title text-center" style="font-size:35px">Automate Your Site </h3>
                        <p class="text-center">In Minutes <br>Enter Your Site Name To Receive A Sample Test Result</p>

                        @livewire('register-home')

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
