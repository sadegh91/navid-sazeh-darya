<span class="text-bold-500" style="margin-right: 4px">{{$title}}</span>
<fieldset class="form-label-group" style="margin-top: 4px">
    <label class="text-bold-700" for="{{$name}}">{{$title}}</label>
    <textarea class="form-control @error($name) is-invalid @enderror black" id="{{$name}}" name="{{$name}}" rows="3" placeholder="{{$title}}" style="height: 146px;">{{old($name,$edit ?? '')}}</textarea>
    @if ($errors->has($name))
        @foreach ($errors->get($name) as $error)
            <div class="invalid-feedback">
                <i class="bx bx-radio-circle"></i>
                {{ $error }}
            </div>
        @endforeach
    @endif
</fieldset>
