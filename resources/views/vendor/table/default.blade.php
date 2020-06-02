<div class="row p-3">
    <table class="table" id="">
        <thead class=" text-primary">
        <tr>
            <th>@lang('Օր')</th>
            <th>@lang('Ժամ')</th>
            <th>@lang('Արժեք')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data->items() as $item)
            <tr>
                <td>{{$item->date}}</td>
                <td>{{$item->time}}</td>
                <td>{{$item->value}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 float-right">
        {{$data->links()}}
    </div>
</div>