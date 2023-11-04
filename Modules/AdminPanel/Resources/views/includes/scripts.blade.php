<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

<!-- Javascript default internal -->
<!-- To be fixed 
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/jquery/jquery.slim.js') }}" crossorigin="anonymous"></script>
<script src="{{ URL::asset('assets/vendor/popper/popper.min.js') }}" crossorigin="anonymous"></script>
-->

<!-- JavaScript external -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/10be35fba2.js" crossorigin="anonymous"></script>

<!-- JavaScripts internal -->
<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ URL::asset('assets-admin/js/sb-admin-2.min.js') }}"></script>


<!-- Custom scripts per page -->
@yield('scripts')