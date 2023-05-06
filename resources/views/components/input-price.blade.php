<span class="text-bold-500" style="margin-right: 4px">{{$title}}</span>
<fieldset class="form-label-group" style="margin-top: 4px">
    <label class="text-bold-700" for="{{$name}}">{{$title}}</label>
    <div class="input-group">
        <input  style="color: black;" type="text" class="form-control @error($name) is-invalid @enderror" id="{{$name}}" name="{{$name}}" value="{{$edit}}" maxlength="{{$length}}" placeholder="{{$title}}"
                oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">{{$type}}</span>
        </div>
    </div>
    @if ($errors->has($name))
        @foreach ($errors->get($name) as $error)
            <div class="invalid-feedback">
                <i class="bx bx-radio-circle"></i>
                {{ $error }}
            </div>
        @endforeach
    @endif
</fieldset>


<script>
    function updateTextView(_obj) {
        const num = getNumber(_obj.val());
        if (num === 0) {
            _obj.val('');
        } else {
            _obj.val(num.toLocaleString());
        }
    }

    function getNumber(_str) {
        const arr = _str.split('');
        const out = [];
        for (let cnt = 0; cnt < arr.length; cnt++) {
            if (isNaN(arr[cnt]) === false) {
                out.push(arr[cnt]);
            }
        }
        return Number(out.join(''));
    }

    $(document).ready(function () {
        $({{$name}}).on('keyup', function () {
            updateTextView($(this));
        });
    });
</script>
