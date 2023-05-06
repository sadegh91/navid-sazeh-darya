<button id="submit_button" type="submit" class="btn {{$color}}  glow position-relative w-100">
    {{$text}}
    <i id="icon-arrow" class="bx bx-left-arrow-alt"></i></button>
<button class="btn {{$color}}  col-12" type="button" disabled="" id="progress_submit_button" style="display: none">
    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
    {{$loading}}
</button>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {

        $('#submit_button').click(function () {
            $('#progress_submit_button').show();
            $('#submit_button').hide();
        });

    });

</script>
