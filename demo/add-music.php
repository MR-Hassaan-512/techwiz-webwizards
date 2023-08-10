<!DOCTYPE html>
<html lang="en">

<body>


<!-- Begin | Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
<div id="wrapper" data-scrollable="true">

<?php include "./include/sideBar.php"; ?>

    <!-- Begin | Page Wrapper [[ Find at scss/framework/base/wrapper/wrapper.scss ]] -->
    <main id="pageWrapper">



        <!-- Page Banner [[ Find at scss/base/core.scss ]] -->
        <div class="banner bg-song"></div>

        <!-- Begin | Main Container [[ Find at scss/base/core.scss ]] -->
        <div class="main-container" id="appRoute">

            <div class="row section">
                <div class="col-xl-8 col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Add Music</h6>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-row form-group">
                                    <label for="songName" class="col-md-4 text-md-right col-form-label">Song Name</label>
                                    <div class="col-md-7">
                                        <input type="text" id="songName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <label for="songImage" class="col-md-4 text-md-right col-form-label">Song Cover Image</label>
                                    <div class="col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="songImage">
                                            <label class="custom-file-label" for="songImage">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <label for="songFile" class="col-md-4 text-md-right col-form-label">Song File</label>
                                    <div class="col-md-7">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="songFile">
                                            <label class="custom-file-label" for="songImage">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <label for="artistName" class="col-md-4 text-md-right col-form-label">Artist Name</label>
                                    <div class="col-md-7">
                                        <input type="text" id="artistName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <label for="composerName" class="col-md-4 text-md-right col-form-label">Composer Name</label>
                                    <div class="col-md-7">
                                        <input type="text" id="composerName" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-7">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="free" name="eventType" class="custom-control-input">
                                            <label class="custom-control-label" for="free">Free Song</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="paid" name="eventType" class="custom-control-input">
                                            <label class="custom-control-label" for="paid">Paid Song</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <label for="songPrice" class="col-md-4 text-md-right col-form-label">Song Price</label>
                                    <div class="col-md-7">
                                        <input type="text" id="songPrice" class="form-control">
                                        <span class="form-text text-muted">Please add Song Price if Song is paid</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-7">
                                    <button type="button" class="btn btn-brand btn-air">Save Song</button>
                                    <button type="button" class="btn btn-outline-secondary">Clear Form</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End | Main Container -->

        <?php include "./include/footer.php"; ?>

    </main>
    <!-- End | Page Wrapper -->

    <!-- Begin | Right Sidebar [[ Find at scss/framework/base/sidebar/right/sidebar.scss ]] -->
    <aside id="rightSidebar">
        <div class="right-sidebar-header">Listen Special</div>
        <div class="right-sidebar-body" data-scrollable="true">
            <ul class="list-group list-group-flush">
                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">I Love You Mummy</p>
                            <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Shack your butty</p>
                            <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Do it your way(Female)</p>
                            <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Say yes</p>
                            <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Where is your letter</p>
                            <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Hey not me</p>
                            <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->

                <!-- Begin | Custom List Item -->
                <li class="custom-list--item list-group-item">
                    <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                        <div class="custom-card--inline-img">
                            <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                        </div>

                        <div class="custom-card--inline-desc">
                            <p class="text-truncate mb-0">Deep inside</p>
                            <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                        </div>
                    </div>
                    <ul class="custom-card--labels d-flex ml-auto">
                        <li class="dropleft">
                            <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-ellipsis-h"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link favorite">
                                        <i class="la la-heart-o"></i>
                                        <span>Favorite</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-plus"></i>
                                        <span>Add to Playlist</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-download"></i>
                                        <span>Download</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="javascript:void(0);" class="dropdown-link">
                                        <i class="la la-share-alt"></i>
                                        <span>Share</span>
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="song-details.php" class="dropdown-link">
                                        <i class="la la-info-circle"></i>
                                        <span>Song Info</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End | Custom List Item -->
            </ul>
        </div>
    </aside>
    <!-- End | Right Sidebar -->

</div>
<!-- End | Wrapper -->

<!-- Begin | Language Modal -->
<?php include "./include/language.php"; ?>
<!-- End | Language Modal -->

<!-- Back Drop -->
<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>

<!-- Scripts -->
<script src="../assets/js/vendors.bundle.js"></script>
<script src="../assets/js/scripts.bundle.js"></script>
</body>
</html>