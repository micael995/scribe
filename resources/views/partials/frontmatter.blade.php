title: {{ $settings['title'] }}

language_tabs:
@foreach($settings['languages'] as $language)
- {{ $language }}
@endforeach

includes:
- "./prepend.md"
- "./authentication.md"
- "./groups/*"
- "./errors.md"
- "./append.md"

logo: {{ $settings['logo'] ?? false }}

toc_footers:
@if($showPostmanCollectionButton)
- <a href="{{ $postmanCollectionLink }}">Ver coleção do Postman</a>
@endif
@if($showOpenAPISpecButton)
- <a href="{{ $openAPISpecLink }}">View OpenAPI (Swagger) spec</a>
@endif
