<x-layout>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
            <div class="container-fluid bg-white">
        <div class="row banner mb-5">
            <div class="col-12 col-sm-12 my-5">
                <p class="h2 text-center my-4 text-success fw-bolder">Odiolowo Connect, Common Pool For Common Benefits</p>
                <p class="h5 text-center m-4 text-dark px-5 opacity-90">Providing Odiolowo youths with a platform to register for youth empowerment programs To empower youths and communities through accessible skills training, mentorship, and innovation-driven education.</p>
            </div>
        </div>
        <div class="row mx-5 mb-5">
            <p class="h5 text-secondary">New and Events</p>
            <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col-12 col-sm-6">
              <div class="card pb-3">
                <img src="image/odiolowo-nycn.jpg" class="card-img-top" alt="..." height="10%">
                <div class="card-body">
                  <h5 class="card-title">Odi-Olowo/Ojuwoye LCDA Invites Applications for Free Graphics Designing Training</h5>
                </div>
              </div>
            </div>
            <div class="col-12 com-sm-6">
              <div class="card pb-5">
                <img src="image/odiolowo-jci.jpg" class="card-img-top" alt="..." height="10%">
                <div class="card-body">
                  <h5 class="card-title">Odi-Olowo/Ojuwoye LCDA Invites Applications for Product Design</h5>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="row mx-5 mb-5">
            <div class="d-flex justify-content-between">
              <p class="h5 text-secondary text-start">Programmes</p>
              <a href="{{route('programmes')}}" class="text-end"><span class="text-primary">View All</span></a>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                  <div class="card h-100">
                    <img src="image/odiolowo-fullstack.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Odi-Olowo/Ojuwoye LCDA Invites Applications for Free Desktop Publishing</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="image/odiolowo-fullstack.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Odi-Olowo/Ojuwoye LCDA Invites Applications for Free Graphics and Animation</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="image/odiolowo-fullstack.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Odi-Olowo/Ojuwoye LCDA Invites Applications for Free Full-Stack Web Development</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="row mx-5 mb-5">
            <p class="h5 text-secondary">Testimonials</p>
            <div class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                  <div class="card h-100">
                    <img src="image/avatar.jpg" class="mx-auto card-img-top img-fluid rounded-circle w-50" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Ajumobi Abdulquyum</h4>
                      <p class="card-subtitle text-center fs-5">Full Stack Engineer</p>
                      <p class="card-text">This free full-stack program completely transformed my career! In just 3 months, I went from zero coding experience to building real-world applications. The project-based curriculum covered everything – frontend (HTML/CSS/JavaScript, Bootstrap), backend (PHP, Laravel, databases), and even handds on projects.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">  
                  <img src="image/avatar-female.png" class="mx-auto card-img-top img-fluid rounded-circle w-50" alt="...">
                      <div class="card-body">
                      <h4 class="card-title text-center">Akande Perfect</h4>
                      <p class="card-subtitle text-center fs-5">BackEnd Developer</p>
                      <p class="card-text">This free backend program took my skills to the next level! In just 3 months, I learned PHP, Laravel, MySQL, and API development through real-world projects. The best part? I deployed my first full backend application before even finishing the course!</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="image/avatar-she.png" class="mx-auto card-img-top img-fluid rounded-circle w-50" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Atesinse Rodiah</h4>
                      <p class="card-subtitle text-center fs-5">Front End Engineer</p>
                      <p class="card-text">This free frontend program was a game-changer! In just 3 months, I went from knowing nothing to building responsive websites with HTML, CSS, and JavaScript. The hands-on projects gave me real portfolio pieces, and the community support kept me motivated.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>  
   </div>

   <style>
    .banner {
    background-image: url("/image/odiolowo-banner.jpg");
    filter: grayscale(20%) brightness(96%);
    min-height: 25rem;
    font-family: Arial, sans-serif;
    background-attachment: fixed;
}
   </style>
</x-layout>
