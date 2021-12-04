<div class="socialities mt-1">
    <ul class="list-inline d-flex justify-content-evenly gap-3">
        <li class=""><a
                class="rounded-circle bg-white d-flex justify-content-center align-items-center text-decoration-none light-shadow"
                href="{{ route('login.google') }}"><i class="fab fa-google fs-3"></i></a>
        </li>
        <li class=""><a
                class="rounded-circle d-flex justify-content-center align-items-center text-decoration-none light-shadow bg-facebook-color"
                href="{{route('login.facebook')}}"><i class="fab fa-facebook-f fs-3 text-white"></i></a>
        </li>
        <li class=""><a
                class="rounded-circle d-flex justify-content-center align-items-center text-decoration-none light-shadow"
                href="{{route('login.github')}}"><i class="fab fa-github fs-3 text-white"></i></a>
        </li>
    </ul>
</div>
