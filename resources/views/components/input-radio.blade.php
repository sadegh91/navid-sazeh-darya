<li class="d-inline-block mr-2">
    <fieldset>
        <div class="radio {{$color}} radio-glow" >
            <input type="radio" id="{{$value}}" value="{{$value}}" name="{{$name}}"  {{$checked}} @if($edit == $value) checked @endif>
            <label for="{{$value}}">{{$title}}</label>
        </div>
    </fieldset>
</li>
