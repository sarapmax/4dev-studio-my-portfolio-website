@if(!empty($meta['title']))
    <title>{{ $meta['title'] . ' - 4dev | Studio ' }}</title>
@else
    <title>4dev | Studio</title>
@endif
    <!--Facebook Metadata /-->
@if(!empty($meta['image']))
    <meta property="og:image" content="{{ url($meta['image']) }}"/>
@else
    <meta property="og:image" content="{{ url('img/4dev-logo-sharer.png') }}"/>
@endif
@if(!empty($meta['description']))
    <meta property="og:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta property="og:description" content="Better by Development and Design. เรามีประสบการณ์ในการสร้างสรรค์ผลงานมากมาย ทุกๆ งาน เหมือนกับศิลปะที่เราจะทำด้วยความคิดสร้างสรรค์และความตั้งใจ และสร้างสิ่งเหล่านั้นออกมาอย่างดีที่สุด""/>
@endif
@if(!empty($meta['title']))
    <meta property="og:title" content="{{ $meta['title'] }}"/>
@else
    <meta property="og:title" content="4dev | Studio"/>
@endif
    <!--Google+ Metadata /-->
@if(!empty($meta['title']))
    <meta itemprop="name" content="{{ $meta['title'] }}">
@else
    <meta itemprop="name" content="4dev | Studio">
@endif
@if(!empty($meta['description']))
    <meta itemprop="description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta itemprop="description" content="Better by Development and Design. เรามีประสบการณ์ในการสร้างสรรค์ผลงานมากมาย ทุกๆ งาน เหมือนกับศิลปะที่เราจะทำด้วยความคิดสร้างสรรค์และความตั้งใจ และสร้างสิ่งเหล่านั้นออกมาอย่างดีที่สุด""/>
@endif
@if(!empty($meta['image']))
    <meta itemprop="image" content="{{ url($meta['image']) }}"/>
@else
    <meta itemprop="image" content="{{ url('img/4dev-logo-sharer.png') }}"/>
@endif
    <!-- Twitter Metadata /-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@4devstudio.com"/>
@if(!empty($meta['title']))
    <meta name="twitter:title" content="{{ $meta['title'] }}">
@else
    <meta name="twitter:title" content="4dev | Studio">
@endif
@if(!empty($meta['description']))
    <meta name="twitter:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
@else
    <meta name="twitter:description" content="Better by Development and Design. เรามีประสบการณ์ในการสร้างสรรค์ผลงานมากมาย ทุกๆ งาน เหมือนกับศิลปะที่เราจะทำด้วยความคิดสร้างสรรค์และความตั้งใจ และสร้างสิ่งเหล่านั้นออกมาอย่างดีที่สุด""/>
@endif
@if(!empty($meta['image']))
    <meta name="twitter:image" content="{{ url($meta['image']) }}"/>
@else
    <meta name="twitter:image" content="{{ url('img/4dev-logo-sharer.png') }}"/>
@endif
    <meta name="twitter:domain" content="4devstudio.com">
