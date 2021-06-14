


<div>
    @foreach ($this->plancomptableTrees as $data)
        <div>  {{ $data->codecompte}} </div>
        @foreach ($this->parent_data($data->id) as $value)
            <div>  {{ $value->codecompte}} </div>
        @endforeach
        <hr>
    @endforeach
</div>