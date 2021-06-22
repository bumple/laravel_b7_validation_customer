<div class="content">
    <div class="title m-b-md">
        Laravel Cusstom Validation
    </div>
    <div class="error-message">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        <p style="color: red"> {{$error}} </p>
                    </li>
                @endforeach
            </ul>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <p style="color: green">{{\Illuminate\Support\Facades\Session::get('success')}}</p>
        @endif
    </div>
    <div class="form-custom-validation">
        <form action="{{ route('form.submit') }}" method="GET">
            <label for="name">Name: </label>
            <input id="name" name="name" type="text" placeholder="Enter the full name">
            <br>
            <label for="age">Age: </label>
            <input id="age" name="age" type="text" placeholder="Enter the age">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
