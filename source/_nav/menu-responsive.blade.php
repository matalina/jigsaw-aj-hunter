<nav id="js-nav-menu" class="nav-menu hidden mt-4 lg:hidden block w-full lg:h-0">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >News</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Books"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/books') ? 'active text-blue' : '' }}"
            >Books</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
        <li class="pl-4">
            <a
                title="The Mind of Nox"
                href="https://themindofnox.com"
                class="nav-menu__item hover:text-blue-500"
            >The Mind of Nox</a>
        </li>
    </ul>
</nav>
