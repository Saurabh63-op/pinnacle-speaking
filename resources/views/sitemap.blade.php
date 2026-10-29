{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

  {{-- Static Pages --}}
  <url>
    <loc>{{ url('/') }}</loc>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/about') }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/courses') }}</loc>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/services') }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/blog') }}</loc>
    <changefreq>weekly</changefreq>
    <priority>0.7</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/contact') }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>
  <url>
    <loc>{{ url('/gallery') }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.5</priority>
    <lastmod>{{ now()->toAtomString() }}</lastmod>
  </url>

  {{-- Course Pages --}}
  @foreach ($courses as $course)
  <url>
    <loc>{{ url('/courses/' . $course->slug) }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
    <lastmod>{{ $course->updated_at?->toAtomString() ?? now()->toAtomString() }}</lastmod>
  </url>
  @endforeach

  {{-- Blog Pages --}}
  @foreach ($posts as $post)
  <url>
    <loc>{{ url('/blog/' . $post->slug) }}</loc>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
    <lastmod>{{ $post->updated_at?->toAtomString() ?? now()->toAtomString() }}</lastmod>
  </url>
  @endforeach

</urlset>
