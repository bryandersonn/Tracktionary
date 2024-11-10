<section id="favsongs">
    <p id="favsongtitle">Check out your favourite songs:</p>
    <div class="genrebuttons">
        <button id="R&B" onclick="window.location.href='{{ route('genre.action', ['genre' => 'R&B']) }}#favsongs'">
            R&B
        </button>
        <button id="jazz" onclick="window.location.href='{{ route('genre.action', ['genre' => 'Jazz']) }}#favsongs'">
            Jazz
        </button>
        <button id="ballad" onclick="window.location.href='{{ route('genre.action', ['genre' => 'Ballad']) }}#favsongs'">
            Ballad
        </button>
        <button id="K-Ballad" onclick="window.location.href='{{ route('genre.action', ['genre' => 'K-Ballad']) }}#favsongs'">
            K-Ballad
        </button>
        <button id="K-Pop" onclick="window.location.href='{{ route('genre.action', ['genre' => 'K-Pop']) }}#favsongs'">
            K-Pop
        </button>
        <button id="Pop" onclick="window.location.href='{{ route('genre.action', ['genre' => 'Pop']) }}#favsongs'">
            Pop
        </button>
        <button id="EDM" onclick="window.location.href='{{ route('genre.action', ['genre' => 'EDM']) }}#favsongs'">
            EDM
        </button>
        <button id="Rock" onclick="window.location.href='{{ route('genre.action', ['genre' => 'Rock']) }}#favsongs'">
            Rock
        </button>
    </div>
    <p id="currgenretext">You are now on</p>
    <p id="currgenre">{{$genre}}</p>
    <div class="songcontainer">
        @foreach ($songs as $song)
        <iframe style="border-radius:12px" src="{{$song->embed}}" width="25%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        @endforeach
    </div>
</section>
