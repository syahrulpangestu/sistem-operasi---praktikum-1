@foreach ($data as $key => $value)
<div class="col-4">
    <div class="cards">
        <div class="card-image-top">
            <img src="{{url('assets/images/'.$value->image)}}" alt="" srcset="">
            {{-- <img src="{{ url('storage/app/'.$value->image) }}" alt="" srcset=""> --}}
        </div>
        <div class="card-content">
            <a href=""><h3 class="card-title">{{$value->judul}}</h3></a>
            <p class="card-text">{{$value->deskripsi}}</p>
            <span class="card-author">{{$value->nama}}</span>
            <span class="card-date">{{$value->created_at}}</span>
        </div>
    </div>    
</div>
@endforeach
