<x-frontend-layout>

    <main>
        <div class="relative flex items-center content-center justify-center pt-16 pb-32 min-h-screen-75">
                <div
                    class="absolute top-0 w-full h-full bg-center bg-cover"
                    style="
                    background-image: url('{{ asset('theme/assets/img/meeting-03.jfif') }}');
                    "
                >
                    <span
                    id="blackOverlay"
                    class="absolute w-full h-full bg-black opacity-75"
                    ></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="flex flex-wrap items-center">
                    <div class="w-full px-4 ml-auto mr-auto text-center lg:w-6/12">
                        <div class="pr-12">
                        <h1 class="text-5xl font-semibold text-white">
                            Your story starts with us.
                        </h1>
                        <p class="mt-4 text-lg text-blueGray-200">
                            This is a simple example of a Landing Page you can build using
                            Notus JS. It features multiple CSS components based on the
                            Tailwind CSS design system.
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div
                    class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none h-70-px"
                    style="transform: translateZ(0px)"
                >
                    <svg
                    class="absolute bottom-0 overflow-hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none"
                    version="1.1"
                    viewBox="0 0 2560 100"
                    x="0"
                    y="0"
                    >
                    <polygon
                        class="fill-current text-blueGray-200"
                        points="2560 0 2560 100 0 100"
                    ></polygon>
                    </svg>
                </div>
            </div>

        <section class="pb-20 -mt-24 bg-blueGray-200">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 pt-6 text-center lg:pt-12 md:w-4/12">
                        <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                        >
                        <div class="flex-auto px-4 py-5">
                            <div
                            class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-red-400 rounded-full shadow-lg"
                            >
                            <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Awarded Agency</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                            Divide details about your product or agency work into parts.
                            A paragraph describing a feature will be enough.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="w-full px-4 text-center md:w-4/12">
                        <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                        >
                        <div class="flex-auto px-4 py-5">
                            <div
                            class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white rounded-full shadow-lg bg-lightBlue-400"
                            >
                            <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Free Revisions</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                            Keep you user engaged by providing meaningful information.
                            Remember that by this time, the user is curious.
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="w-full px-4 pt-6 text-center md:w-4/12">
                        <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                        >
                        <div class="flex-auto px-4 py-5">
                            <div
                            class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white rounded-full shadow-lg bg-emerald-400"
                            >
                            <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Verified Company</h6>
                            <p class="mt-2 mb-4 text-blueGray-500">
                            Write a few lines about each one. A paragraph describing a
                            feature will be enough. Keep you user engaged!
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                        <div
                        class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center bg-white rounded-full shadow-lg text-blueGray-500"
                        >
                        <i class="text-xl fas fa-user-friends"></i>
                        </div>
                        <h3 class="mb-2 text-3xl font-semibold leading-normal">
                        Working with us is a pleasure
                        </h3>
                        <p
                        class="mt-4 mb-4 text-lg font-light leading-relaxed text-blueGray-600"
                        >
                        Don't let your uses guess by attaching tooltips and popoves to
                        any element. Just make sure you enable them first via
                        JavaScript.
                        </p>
                        <p
                        class="mt-0 mb-4 text-lg font-light leading-relaxed text-blueGray-600"
                        >
                        The kit comes with three pre-built pages to help you get started
                        faster. You can change the text and images and you're good to
                        go. Just make sure you enable them first via JavaScript.
                        </p>
                        <a href="{{ route('index') }}" class="mt-8 font-bold text-blueGray-700"
                        >Check Notus JS!</a
                        >
                    </div>
                    <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                        <div
                        class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white bg-pink-500 rounded-lg shadow-lg"
                        >
                        <img
                            alt="..."
                            src="{{ asset('theme/assets/img/meeting-01.jfif') }}"
                            class="w-full align-middle rounded-t-lg"
                        />
                        <blockquote class="relative p-8 mb-4">
                            <svg
                            preserveAspectRatio="none"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 583 95"
                            class="absolute left-0 block w-full h-95-px -top-94-px"
                            >
                            <polygon
                                points="-30,95 583,95 583,65"
                                class="text-pink-500 fill-current"
                            ></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                            Top Notch Services
                            </h4>
                            <p class="mt-2 font-light text-white text-md">
                            The Arctic Ocean freezes every winter and much of the
                            sea-ice then thaws every summer, and that process will
                            continue whatever happens.
                            </p>
                        </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20">
            <div
                class="absolute top-0 left-0 right-0 bottom-auto w-full h-20 -mt-20 overflow-hidden pointer-events-none"
                style="transform: translateZ(0px)"
            >
                <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
                >
                <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
                </svg>
            </div>
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap items-center">
                <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                    <img
                    alt="..."
                    class="max-w-full rounded-lg shadow-lg"
                    src="{{ asset('theme/assets/img/meeting-02.jfif') }}"
                    />
                </div>
                <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                    <div class="md:pr-12">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-pink-600 bg-pink-300 rounded-full shadow-lg"
                    >
                        <i class="text-xl fas fa-rocket"></i>
                    </div>
                    <h3 class="text-3xl font-semibold">A growing company</h3>
                    <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                        The extension comes with three pre-built pages to help you get
                        started faster. You can change the text and images and you're
                        good to go.
                    </p>
                    <ul class="mt-6 list-none">
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                ><i class="fas fa-fingerprint"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-blueGray-500">
                                Carefully crafted components
                            </h4>
                            </div>
                        </div>
                        </li>
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                ><i class="fab fa-html5"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-blueGray-500">Amazing page examples</h4>
                            </div>
                        </div>
                        </li>
                        <li class="py-2">
                        <div class="flex items-center">
                            <div>
                            <span
                                class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                                ><i class="far fa-paper-plane"></i
                            ></span>
                            </div>
                            <div>
                            <h4 class="text-blueGray-500">Dynamic components</h4>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="pt-20 pb-48">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap justify-center mb-24 text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                    <p class="m-4 text-lg leading-relaxed text-blueGray-500">
                    According to the National Oceanic and Atmospheric
                    Administration, Ted, Scambos, NSIDClead scentist, puts the
                    potentially record maximum.
                    </p>
                </div>
                </div>
                <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                    <img
                        alt="..."
                        src="{{ asset('theme/assets/img/team-1-800x800.jpg') }}"
                        class="mx-auto rounded-full shadow-lg max-w-120-px"
                    />
                    <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Ryan Tompson</h5>
                        <p
                        class="mt-1 text-sm font-semibold uppercase text-blueGray-400"
                        >
                        Web Developer
                        </p>
                        <div class="mt-6">
                        <button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-lightBlue-400 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-twitter"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-lightBlue-600 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-facebook-f"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-dribbble"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                    <img
                        alt="..."
                        src="{{ asset('theme/assets/img/team-2-800x800.jpg') }}"
                        class="mx-auto rounded-full shadow-lg max-w-120-px"
                    />
                    <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Romina Hadid</h5>
                        <p
                        class="mt-1 text-sm font-semibold uppercase text-blueGray-400"
                        >
                        Marketing Specialist
                        </p>
                        <div class="mt-6">
                        <button
                            class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-google"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-lightBlue-600 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                    <img
                        alt="..."
                        src="{{ asset('theme/assets/img/team-3-800x800.jpg') }}"
                        class="mx-auto rounded-full shadow-lg max-w-120-px"
                    />
                    <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Alexa Smith</h5>
                        <p
                        class="mt-1 text-sm font-semibold uppercase text-blueGray-400"
                        >
                        UI/UX Designer
                        </p>
                        <div class="mt-6">
                        <button
                            class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-google"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-lightBlue-400 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-twitter"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-blueGray-700 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-instagram"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                    <img
                        alt="..."
                        src="{{ asset('theme/assets/img/team-4-470x470.png') }}"
                        class="mx-auto rounded-full shadow-lg max-w-120-px"
                    />
                    <div class="pt-6 text-center">
                        <h5 class="text-xl font-bold">Jenna Kardi</h5>
                        <p
                        class="mt-1 text-sm font-semibold uppercase text-blueGray-400"
                        >
                        Founder and CEO
                        </p>
                        <div class="mt-6">
                        <button
                            class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-dribbble"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-google"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-lightBlue-400 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-twitter"></i></button
                        ><button
                            class="w-8 h-8 mb-1 mr-1 text-white rounded-full outline-none bg-blueGray-700 focus:outline-none"
                            type="button"
                        >
                            <i class="fab fa-instagram"></i>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="relative block pb-20 bg-blueGray-800">
            <div
                class="absolute top-0 left-0 right-0 bottom-auto w-full h-20 -mt-20 overflow-hidden pointer-events-none"
                style="transform: translateZ(0px)"
            >
                <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
                >
                <polygon
                    class="fill-current text-blueGray-800"
                    points="2560 0 2560 100 0 100"
                ></polygon>
                </svg>
            </div>
            <div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap justify-center text-center">
                    <div class="w-full px-4 lg:w-6/12">
                        <h2 class="text-4xl font-semibold text-white">Build something</h2>
                        <p class="mt-4 mb-4 text-lg leading-relaxed text-blueGray-400">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center mt-12">
                    <div class="w-full px-4 text-center lg:w-3/12">
                        <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 bg-white rounded-full shadow-lg text-blueGray-800"
                        >
                        <i class="text-xl fas fa-medal"></i>
                        </div>
                        <h6 class="mt-5 text-xl font-semibold text-white">
                        Excelent Services
                        </h6>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                        </p>
                    </div>
                    <div class="w-full px-4 text-center lg:w-3/12">
                        <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 bg-white rounded-full shadow-lg text-blueGray-800"
                        >
                        <i class="text-xl fas fa-poll"></i>
                        </div>
                        <h5 class="mt-5 text-xl font-semibold text-white">
                        Grow your market
                        </h5>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                        </p>
                    </div>
                    <div class="w-full px-4 text-center lg:w-3/12">
                        <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 bg-white rounded-full shadow-lg text-blueGray-800"
                        >
                        <i class="text-xl fas fa-lightbulb"></i>
                        </div>
                        <h5 class="mt-5 text-xl font-semibold text-white">Launch time</h5>
                        <p class="mt-2 mb-4 text-blueGray-400">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative block py-24 lg:pt-0 bg-blueGray-800">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap justify-center -mt-48 lg:-mt-64">
                <div class="w-full px-4 lg:w-6/12">
                    <div
                    class="relative flex flex-col w-full min-w-0 mb-6 break-words rounded-lg shadow-lg bg-blueGray-200"
                    >
                    <div class="flex-auto p-5 lg:p-10">
                        <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                        <p class="mt-1 mb-4 leading-relaxed text-blueGray-500">
                        Complete this form and we will get back to you in 24 hours.
                        </p>
                        <div class="relative w-full mt-8 mb-3">
                        <label
                            class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                            for="full-name"
                            >Full Name</label
                        ><input
                            type="text"
                            class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                            placeholder="Full Name"
                        />
                        </div>
                        <div class="relative w-full mb-3">
                        <label
                            class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                            for="email"
                            >Email</label
                        ><input
                            type="email"
                            class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                            placeholder="Email"
                        />
                        </div>
                        <div class="relative w-full mb-3">
                        <label
                            class="block mb-2 text-xs font-bold uppercase text-blueGray-600"
                            for="message"
                            >Message</label
                        ><textarea
                            rows="4"
                            cols="80"
                            class="w-full px-3 py-3 text-sm bg-white border-0 rounded shadow placeholder-blueGray-300 text-blueGray-600 focus:outline-none focus:ring"
                            placeholder="Type a message..."
                        ></textarea>
                        </div>
                        <div class="mt-6 text-center">
                        <button
                            class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none bg-blueGray-800 active:bg-blueGray-600 hover:shadow-lg focus:outline-none"
                            type="button"
                        >
                            Send Message
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>

    @push('script')

        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
        <script>
            /* Make dynamic date appear */
            (function () {
                if (document.getElementById("get-current-year")) {
                    document.getElementById("get-current-year").innerHTML = new Date().getFullYear();
                };
            })();
            /* Function for opning navbar on mobile */
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
                let element = event.target;
                while (element.nodeName !== "A") {
                    element = element.parentNode;
                };
                Popper.createPopper(element, document.getElementById(dropdownID), {
                    placement: "bottom-start",
                });
                document.getElementById(dropdownID).classList.toggle("hidden");
                document.getElementById(dropdownID).classList.toggle("block");
            }
        </script>

    @endpush

</x-frontend-layout>
