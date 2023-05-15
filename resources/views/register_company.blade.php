@push('styles')
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
@endpush

<x-guest-layout>


    <div class="fancy-feature-nineteen position-relative pt-130 lg-pt-80 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-6 col-md-6">

                    <div class="console">
                        <div class="console-header">
                            <div class="action-buttons">
                                <div class="action close"></div>
                                <div class="action minimize"></div>
                                <div class="action expand"></div>
                            </div>
                        </div>
                        <div class="terminal-input">
                            <span class="prompt">></span>
                            <input type="text" disabled id="another-command-input" placeholder="Testing in progress....">
                        </div>
                        <pre id="console-log"></pre>

                        <div class="terminal-input">
                            <span class="prompt">$</span>
                            <input type="text" id="command-input" placeholder="Type a command">
                        </div>
                    </div>


                </div>
                <div class="col-xxl-6 col-md-6 ml-4"
                    style="border-radius:20px;padding:10px;box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;">
                    <div class="form-style-one">
                        <h3 class="form-title p-3" style="font-size:25px">Register Your Company</h3>

                        @livewire('register-company-form')

                    </div>
                </div>
            </div>
        </div>

    </div>


</x-guest-layout>
