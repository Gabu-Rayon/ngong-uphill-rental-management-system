@extends('layout.app')

@section('content')

<div id="userContentContainer">
    <nav id="userSideBar">
        <div class="image">
            <div class="text-center mt-3">
                <img src="https://via.placeholder.com/100" alt="User Profile Image"
                    class="rounded-circle user-profile-image" width="150">
                <a href="#" class="update-profile-icon" data-toggle="tooltip" data-placement="bottom"
                    title="Update Profile Image">
                    <span class="fa fa-plus-circle text-dark"></span>
                </a>
            </div>
        </div>
        <div class="userSideBar-header">
            <h3>userSideBar</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Page</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <hr>
            <li>
                <a href="pay-rental">Pay Rental</a>
            </li>
            <hr>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <div id="mainContent">
         <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_1.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_3.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_4.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_5.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('{{ asset('assets/images/image_6.jpg') }}');">
              </a>
              <div class="text p-4 text-center">
                <h3 class="heading"><a href="#">Work Hard, Party Hard in a Luxury Chalet in the Alps</a></h3>
                <div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
</div>
@endsection
