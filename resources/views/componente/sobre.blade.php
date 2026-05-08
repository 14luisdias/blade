<x-layout>
    <x-slot name="titulo">
        Página de Sobre
    </x-slot>
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <x-sobre-descricao margem="ms-auto"> Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization. </x-sobre-descricao>
                <x-sobre-descricao margem="me-auto"> You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</x-sobre-descricao>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <x-botao class="btn-xl" id="teste" titulo="Free Download!" href="https://startbootstrap.com/theme/freelancer/" />
            </div>
        </div>
    </section>
</x-layout>
