<?php
require_once "layout/client/header.php";
?>
<?php
require_once "layout/client/navbar.php";
?>


<!-- content -->
<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content title -->
                    <h2 class="content__title">Recently updated</h2>
                    <!-- end content title -->

                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">New items</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Movies</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">TV Shows</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button id="4-tab" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Anime</button>
                        </li>
                    </ul>
                    <!-- end content tabs nav -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
                <div class="row">
                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover2.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover3.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">6.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover4.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover5.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover6.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover7.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover8.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.5</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover9.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.7</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover10.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.6</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover11.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">9.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover12.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover13.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover14.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover15.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">5.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover16.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover17.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover18.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
                <div class="row">
                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover6.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover7.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover8.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.5</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover9.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.7</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover10.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.6</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover11.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">9.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover2.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover3.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">6.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover4.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover5.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover12.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover13.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover14.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover15.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">5.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover16.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover17.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover18.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
                <div class="row">
                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover13.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover14.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover15.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">5.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover16.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover17.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover18.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover2.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover3.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">6.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover4.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover5.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover6.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover7.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover8.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.5</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover9.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.7</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover10.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.6</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover11.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">9.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover12.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab" tabindex="0">
                <div class="row">
                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover15.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">5.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover6.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover9.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.7</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover3.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">6.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover4.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--yellow">6.9</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover5.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover2.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover7.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover8.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.5</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover10.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--red">5.6</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Whitney</a></h3>
                                <span class="item__category">
                                    <a href="#">Romance</a>
                                    <a href="#">Drama</a>
                                    <a href="#">Music</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover11.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">9.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover12.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.4</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover13.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover14.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.2</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover16.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.3</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Blindspotting</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                    <a href="#">Drama</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover17.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">8.0</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">I Dream in Another Language</a></h3>
                                <span class="item__category">
                                    <a href="#">Action</a>
                                    <a href="#">Triler</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="item">
                            <div class="item__cover">
                                <img src="public/img/covers/cover18.jpg" alt="">
                                <a href="details.html" class="item__play">
                                    <i class="ti ti-player-play-filled"></i>
                                </a>
                                <span class="item__rate item__rate--green">7.1</span>
                                <button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
                            </div>
                            <div class="item__content">
                                <h3 class="item__title"><a href="details.html">Benched</a></h3>
                                <span class="item__category">
                                    <a href="#">Comedy</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                </div>
            </div>
        </div>
        <!-- end content tabs -->

        <div class="row">
            <!-- more -->
            <div class="col-12">
                <a class="section__more" href="catalog.html">View all</a>
            </div>
            <!-- end more -->
        </div>
    </div>
</section>
<!-- end content -->

<?php
require_once "layout/client/footer.php";
