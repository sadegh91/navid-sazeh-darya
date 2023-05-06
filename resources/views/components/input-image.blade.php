<fieldset class="form-label-group d-inline" style="margin-top: 4px">
    <input class="select-images" type="file" name="{{$name}}" id="file-input"
           accept="image/x-png,image/jpeg,image/png"
           hidden="">
    <div class="media mt-2 cursor-pointer border-dash d-inline">
        <img id="upload-image" src="{{asset($src)}}" class="rounded" alt="{{$title}}" height="200" data-img-title="{{$title}}"
             width="200" style="border: 4px dashed #666">
    </div>
    <div class="d-flex justify-content-between" style="font-size: 18px;color: #333;margin-top: 2px">
        <span style="margin-right: 4px">{{$title}}</span>
        <i id="btn-download" class="bx bxs-download cursor-pointer" style="color: #2a2aff;margin-left: 4px"></i>
    </div>
</fieldset>
@if ($errors->has($name))
    @foreach ($errors->get($name) as $error)
        <div class="invalid-feedback">
            <i class="bx bx-radio-circle"></i>
            {{ $error }}
        </div>
    @endforeach
@endif

<script>

    $(document).ready(function () {
        var imgTitle = $("#upload-image").data("img-title");
        $("#btn-download").click(function () {
            var url = $("#upload-image").attr("src");
            var fileName = imgTitle+".jpg"
            downloadImage(url,fileName);
        });

        $("#upload-image").click(function () {
            $("#file-input").click();
        });
        $("#file-input").change(function () {
            var file = $(this)[0].files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $("#upload-image").attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }

        });

    });

    function downloadImage(url, fileName){
        var a = document.createElement('a');
        a.href = url;
        a.download = fileName;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

</script>
