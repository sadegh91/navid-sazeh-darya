<span class="text-bold-500" style="margin-right: 4px">{{$title}}</span>
<fieldset class="form-label-group" style="margin-top: 4px">
    <input type="text" class="form-control shamsi-datepicker-list @error($name) is-invalid @enderror" value="{{old($name,$edit ?? '')}}"  id="{{$name}}" name="{{$name}}" placeholder="{{$title}}">
    <div class="form-control-position">
        <i class="bx bx-calendar"></i>
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
