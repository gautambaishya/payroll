<!-- About Page -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="img/Logo-Payroll.png">
    <title>Payroll</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'?>
    <?php include 'partials/_header.php';?>

    <section class="text-gray-500 bg-gray-900 body-font py-20">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">

            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <!-- <img class="object-cover object-center rounded" alt="hero" src=""> -->
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Gautam Baishya</h1>
                <p class="mb-8 leading-relaxed text-justify">I am a Btech Student Studying in Tezpur University. This a
                    simple payroll system where I used php as a backend. You can reach to me using the following options given
                    down.</p>

                <p class="text-sm mt-2 text-gray-600 mb-8 w-full text-justify ">Reach Out to me</p>
            </div>
        </div>


        <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-800 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h2 class="text-lg text-white font-medium title-font mb-2">GIT</h2>
                    <p class="leading-relaxed text-base"><a href="https://github.com/gautambaishya"
                            target="_blank">gautambaishya</a>
                    </p>
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="border border-gray-800 p-6 rounded-lg">
                    <div
                        class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </div>
                    <h2 class="text-lg text-white font-medium title-font mb-2">LinkedIn</h2>
                    <p class="leading-relaxed text-base"><a href="https://www.linkedin.com/in/gautam-baishya-6ab513194/"
                            target="_blank">Gautam Baishya</a></p>
                </div>
            </div>
            
            
        </div>
    </section>


    <?php include 'partials/_footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>