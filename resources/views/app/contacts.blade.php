@extends('layouts.front')

@section('content')

    <!-- MAIN -->
    <div id="main">
        <div class="wrapper cf">

            <!-- page content-->
            <div id="page-content" class="cf">

                <p>
                <h3>CONTACT FORM</h3></p>
                <p>Use this contact form to get in touch with us.</p>
                <!-- form -->
                <script type="text/javascript" src="{{asset('js/form-validation.js')}}"></script>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="contactForm" action="{{route('send')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <fieldset>

                        <p>
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" class="form-poshytip"
                                   title="Enter your full name"/>
                        </p>

                        <p>
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" class="form-poshytip"
                                   title="Enter your email address"/>
                        </p>

                        <p>
                            <label for="phone">Phone</label>
                            <input name="phone" id="phone" type="text" class="form-poshytip" title="Enter your phone"/>
                        </p>

                        <p>
                            <label for="web">Choose Product</label>
                            <input name="product" id="web" type="text" class="form-poshytip" title="Choose a product"/>
                        </p>

                        <p>
                            <label for="comments">Message</label>
                            <textarea name="comments" id="comments" rows="5" cols="20" class="form-poshytip"
                                      title="Enter your comments"></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Send" name="button" id="submit"/> <span id="error" class="warning">Message</span>
                        </p>

                    </fieldset>

                </form>
                <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
                <!-- ENDS form -->

            </div>
            <!-- ENDS page content-->

        </div><!-- ENDS WRAPPER -->
    </div>
    <!-- ENDS MAIN -->

@endsection