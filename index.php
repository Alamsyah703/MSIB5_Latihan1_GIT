
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fs-4 fw-bold" href="#">Rizky Alamsyah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <section id="home" class="home container">
        <div class="row d-flex align-items-center flex-md-row flex-column-reverse">
            <div class="col-12 col-md-8">
                <h3 class="fw-semibold">Hi! I am</h3>
                <h1 class="fw-bold">Rizky Alamsyah</h1>
                <p>I am junior programing based in Indonesia</p>
                <a class="btn button" href="images/Profile.png" download>Resume</a>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-md-end justify-content-center">
                <img src="images/Profile.png" alt="Potrait">
            </div>
        </div>
        <a href="#about" class="text-decoration-none arrow w-100 d-flex align-items-center flex-column mt-5">
            <div class="text-dark">More Info</div>
            <img id="arrow" class="mt-2" src="images/arrow.svg" alt="arrow icon">
        </a>
    </section>
    <section id="about" class="about container">
        <p>Halo! Saya adalah Rizky Alamsyah, seorang mahasiswa jurusan Sistem Informasi di UPN Veteran Jawa Timur. Jika Anda ingin berhubungan, saya dapat dijangkau melalui Instagram di @rizkyalamsyahb.

            Saya memiliki minat yang mendalam dalam dunia teknologi, khususnya dalam pengembangan web dan analisis sistem. Saat ini, saya tengah memusatkan perhatian pada pembelajaran berbagai aspek pengembangan web, termasuk HTML, JavaScript, CSS, dan PHP. Salah satu area yang sedang saya eksplorasi adalah pengembangan aplikasi web yang responsif dan interaktif.
            
            Selain dunia teknologi, saya juga memiliki beragam minat lain. Saya sangat menikmati bermain game, bermain voli, dan futsal. Selain itu, saya menemukan inspirasi dari Dea Afrizal, seorang YouTuber yang berbagi pengetahuan tentang pengembangan web dan bidang terkait. Saya sangat menghargai semangatnya dalam berbagi ilmu.
            
            Saya percaya bahwa belajar adalah suatu perjalanan yang tak pernah berakhir, dan saya sangat antusias untuk terus mengejar pengetahuan baru dalam dunia teknologi. Tujuan saya adalah menjadi seorang pengembang web yang kreatif dan handal serta terus berkontribusi pada komunitas pengembang.</p>
        <div class="about-exp">
            <div class="about-exp-item">
                <div class="about-exp-item-header">
                    <div>
                        <h5>Front End Dev</h5>
                        <p>Coding Studio (2023-Now)</p>
                    </div>
                    <button class="btn button" onclick="toggleDetail(event)">More Info</button>
                </div>
                <p class="about-exp-item-detail">Saat ini, saya sedang belajar front-end development melalui kursus intensif di Koding Studio. Saya terpesona dengan kreativitas dan kekuatan visual yang dapat dihasilkan melalui pengembangan front-end. Saya ingin menerapkan pengetahuan baru saya dalam proyek nyata melalui magang, memperluas jaringan profesional, dan meningkatkan keterampilan praktis saya dalam lingkungan kerja yang nyata.</p>
            </div>
            <div class="about-exp-item">
                <div class="about-exp-item-header">
                    <div>
                        <h5>Back End Dev</h5>
                        <p>Coding Studio (2023-Now)</p>
                    </div>
                    <button class="btn button" onclick="toggleDetail(event)">More Info</button>
                </div>
                <p class="about-exp-item-detail">Saya sedang fokus dalam mempelajari back-end development, yang merupakan komponen vital dalam pembangunan aplikasi web. Saya tertarik dengan bahasa pemrograman seperti PHP dan Python, serta kerangka kerja seperti Laravel. Saya belajar tentang pengelolaan basis data, pengembangan API, dan keamanan aplikasi web. Dengan keahlian back-end, saya ingin dapat membangun sistem yang efisien, mengelola data dengan baik, dan memastikan aplikasi web berjalan dengan lancar di sisi server.</p>
            </div>
            <div class="about-exp-item">
                <div class="about-exp-item-header">
                    <div>
                        <h5>Web Dev</h5>
                        <p>Coding Studio (2023-Now)</p>
                    </div>
                    <button class="btn button" onclick="toggleDetail(event)">More Info</button>
                </div>
                <p class="about-exp-item-detail">Selain belajar back-end development, saya juga sedang mengasah keterampilan dalam pengembangan web secara keseluruhan. Saya memperdalam pengetahuan saya tentang HTML, CSS, dan JavaScript untuk menciptakan antarmuka pengguna yang menarik dan responsif. Saya juga ingi mempelajari teknologi seperti VueJS untuk membangun aplikasi web yang interaktif dan dinamis. Dengan kombinasi kemampuan front-end dan back-end, saya ingin menjadi seorang pengembang web yang mampu menciptakan pengalaman pengguna yang luar biasa dan menghadirkan solusi teknologi yang inovatif.</p>
            </div>
        </div>
    </section>
    <section id="Project" class="Project container">
        <div class="row d-flex align-items-center gap-5">
            <div class="col-12 col-5">
                <p>Saat ini, saya tengah mengembangkan game Flappy Bird yang menantang dan sistem e-voting inovatif. Proyek-proyek ini melibatkan desain gameplay yang seru, animasi, pengaturan skor, pemodelan database, antarmuka pengguna, dan integrasi keamanan yang ketat. Selain itu, saya memiliki ketertarikan besar dalam mengembangkan e-commerce di masa depan. Saya ingin menciptakan solusi e-commerce inovatif dan efektif dengan fokus pada pengembangan platform, integrasi pembayaran, manajemen inventaris, dan pengalaman pengguna yang unggul. Saya berkomitmen untuk meningkatkan keterampilan dan pengetahuan saya dalam pengembangan web demi mencapai tujuan tersebut. Dengan dedikasi dan semangat, saya yakin dapat menciptakan solusi e-commerce yang sukses dan berdampak positif.</p>
            </div>
            <div class="col-12 col-6 Project-img">
                <div id="Project-1" class="Project-img-item">    
                    <img src="images/FlappyBird.png" alt="Project 1" >
                </div>
                <div id="Project-2" class="Project-img-item">    
                    <img src="images/FlappyBird1.png" alt="Project 2" >
                </div>
                <div id="Project-3" class="Project-img-item">    
                    <img src="images/voting.png" alt="Project 3" >
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact container">
        <div class="row d-flex align-items-center gap-5">
            <div class="col-12 col-lg-6">
                <p>Untuk informasi lebih lanjut atau kolaborasi potensial, Anda dapat mengunjungi akun Instagram saya dengan username @rizkyalamsyahb atau menghubungi saya melalui Facebook dengan nama Rizky Alamsyah.</p>
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <img class="w-25" src="images/Facebook.svg" alt="facebook icon">
                        <p class="mb-0 ms-2">Rizky Alamsyah</p>
                    </div>
                    <div class="col d-flex align-items-center">
                        <img class="w-25" src="images/Instagram.svg" alt="instagram icon">
                        <p class="mb-0 ms-2">@rizkyalamsyahb</p>
                    </div>
                    <div class="col d-flex align-items-center">
                        <img class="w-25" src="images/Twitter.svg" alt="twitter icon">
                        <p class="mb-0 ms-2"></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
    <form class="contact-form" action="process_form.php" method="post">
        <div class="mb-3">
            <label for="inp_email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inp_email" name="inp_email" placeholder="example@email.com" required>
        </div>
        <div class="mb-3">
            <label for="inp_subject" class="form-label">Name</label>
            <input type="text" class="form-control" id="inp_subject" name="inp_subject" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="inp_message" class="form-label">Message</label>
            <input type="text" class="form-control" id="inp_message" name="inp_message" placeholder="Your Message" required>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button type="submit" class="btn button">Submit</button>
        </div>
    </form>
</div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>