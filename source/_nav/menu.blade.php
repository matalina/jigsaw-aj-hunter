<nav class="hidden lg:flex items-center justify-end text-lg mb-1">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        News
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Books" href="/books"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/books') ? 'active text-blue-600' : '' }}">
        Books
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>

    <a title="The Mind of Nox" href="https://themindofnox.com"
        class="ml-6 text-gray-700 hover:text-blue-600">
        The Mind of Nox
    </a>
</nav>
