@foreach ($basket as $baskets)
    <form action="/api/basket/{{$baskets->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$baskets->basket_id}}">
        </div>
    </form>
@endforeach