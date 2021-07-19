
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title}}</h2>
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali ke blog</a>
@endsection

Post::create([
    'title' => "Judul Ke Lima",
    'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga voluptatum doloremque quam quo tempora dolore mollitia. Rem architecto et in sint quod tenetur aperiam laborum molestias culpa quidem. Ut nemo, tenetur expedita aut praesentium esse libero adipisci natus veritatis laborum illo minima nostrum voluptas, dolorum impedit labore similique aliquid ex fugit non cum accusamus. ",
    'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id fuga voluptatum doloremque quam quo tempora dolore mollitia. Rem architecto et in sint quod tenetur aperiam laborum molestias culpa quidem. Ut nemo, tenetur expedita aut praesentium esse libero adipisci natus veritatis laborum illo minima nostrum voluptas, dolorum impedit labore similique aliquid ex fugit non cum accusamus.</p><p> Consequatur, atque. Nobis quos mollitia possimus amet suscipit minus aspernatur aliquam voluptas maxime in non eum, cum quae cumque vero temporibus, nostrum molestias, molestiae commodi vel sunt iste perspiciatis. Itaque dolor sequi sint saepe, consequuntur nesciunt fugit, repudiandae aliquam maxime enim eveniet. Ex consectetur fugit dolor, dolorum omnis et asperiores magni temporibus ipsum nam ducimus quisquam officia in ratione natus iure. Fugit repudiandae excepturi cupiditate sapiente libero recusandae eius impedit assumenda corporis, cumque veritatis laudantium quam error asperiores hic, porro ipsa veniam non perspiciatis soluta commodi.</p><p> Quas dolorem tenetur consequuntur fuga provident, veniam incidunt dolores recusandae quis. Rem inventore est ab officia. Maxime ipsa illo itaque iste veritatis voluptatem unde blanditiis. Nesciunt itaque pariatur non tenetur incidunt ipsa, ullam voluptatum ea adipisci ipsam repellendus quis consequatur voluptate, voluptatem alias fugit magni minus iste ratione expedita, odit veritatis magnam! Impedit labore voluptatem accusamus? Illo, inventore beatae.</p>"
])