<span class="text-bold-500" style="margin-right: 4px">{{$title}}</span>
<fieldset class="form-label-group" style="margin-top: 4px">
    <label class="text-bold-700" for="{{$name}}">{{$title}}</label>
    <input  style="color: black;" type="text" class="form-control @error($name) is-invalid @enderror"
            id="{{$name}}" name="{{$name}}" value="{{old($name,$edit ?? '')}}" maxlength="{{$length}}" placeholder="{{$title}}"
        {{ $disabled ?? '' }}
    >
    <div class="form-control-position">
        <i class="bx {{$icon}}"></i>
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
