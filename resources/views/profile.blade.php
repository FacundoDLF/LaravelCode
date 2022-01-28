@extends('layouts.app')

@section('content')
<div class="container" style="width: 750px;">
    <div class="row">
        <div class="col-3 pt-5 pe-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4dTIxPhK73Ecs215sQu0-5Kf5HMUDXKHvpAeTLyU5p9mr_vlcbvMP50EZNxdMuZlb9XU&usqp=CAU" alt="freeCodeGramLogo" class="rounded-circle" style="width: 150px;">
        </div>
        <div class="col-9 pt-5 ps-5">
            <div class="d-flex"><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-4"><strong>153</strong>posts</div>
                <div class="pe-4"><strong>23k</strong>followers</div>
                <div class="pe-4"><strong>212</strong>following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div><p>{{ $user->profile->description }}</p></div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img class="w-100" src="https://media.istockphoto.com/photos/laptop-notebook-and-coffee-cup-on-wooden-table-picture-id1059809884" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://noticiasdelmundo.news/wp-content/uploads/2021/03/Cosas-a-tener-en-cuenta-al-comprar-un-Apple-Mac.jpg" alt=""></div>
        <div class="col-4"><img class="w-100" src="https://www.luc.edu/media/lucedu/quinlan-main/1000x560/CME-Scholars-2019-1000x560.jpg" alt=""></div>
    </div>
</div>
@endsection
