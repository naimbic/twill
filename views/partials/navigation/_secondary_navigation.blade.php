@if (!empty($links) || !empty(\A17\Twill\Facades\TwillNavigation::getSecondaryRequestLinks()))
    <nav class="nav">
        <div class="container">
            <ul class="nav__list">
                @foreach (\A17\Twill\Facades\TwillNavigation::getSecondaryRequestLinks() as $navItem)
                    {!! $navItem->render(class: 'nav__item') !!}
                @endforeach
                @foreach ($links as $navItem)
                    {!! $navItem->render(class: 'nav__item') !!}
                @endforeach
            </ul>
        </div>
    </nav>
@endif
