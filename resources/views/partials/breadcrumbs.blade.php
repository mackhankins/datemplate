@if (count($breadcrumbs))

<ol class="breadcrumb">
    @foreach ($breadcrumbs as $breadcrumb)

    @if ($breadcrumb->url && !$loop->last)
    @if($loop->first)
    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}"><i class="fas fa-home" /></i></a>
        @else
    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
    @endif
    @else
    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
    @endif

    @endforeach
</ol>

@endif
