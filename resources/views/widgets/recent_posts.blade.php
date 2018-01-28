<h3>Список Статей</h3>
<ul class="pills1">
    @foreach ($articles as $key => $value)
        <li class="pills2"><a href="{{ $value->id }}">{{ $value->title }}</a></li>
    @endforeach
</ul>


<style>
        h3 {
                letter-spacing: 2px;
                background-color: snow;
                border-radius: 8px;
                color: #00b0ff;
                font-family: 'Dancing Script', cursive;
                text-align: center;
        }
        .pills1 {
                list-style: none;
                background-color: #00b0ff;
                border-radius: 8px;
                border: 1px solid white;
        }

        .pills2 a{
                font-size: 18px;
                text-decoration: none;
                color: yellow;
                font-family: 'Dancing Script';
                margin-left: 5px;
        }

        .pills2 a:hover{
                opacity: 0.5;
                transition: all 0.8s ease-out
        }
</style>