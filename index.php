<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cihuy</title>
    <link rel="icon" href="assets/earth.png" type="image/x-icon">    
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            Cihuy
        </div>
        <ul class="nav-link">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li class="services">
                    <a href="#">Category</a>
                    <ul class="dropdown">
                        <li><a href="#">Kategori 1</a></li>
                        <li><a href="#">Kategori 2</a></li>
                        <li><a href="#">Kategori 3</a></li>
                        <li><a href="#">Kategori 4</a></li>
                    </ul>
                </li>
            </div>
        </ul>
    </nav>
    <div class="containers">
        <div class="rows">
            <div class="col-9">
                <h1>Hot News</h1><hr>
                <div class="rows">
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="assets/berita-1.png" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus, ut mollis eros sollicitudin vel.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="assets/berita-2.jpeg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus, ut mollis eros sollicitudin vel.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                </div>                
            </div>
            <div class="col-3">
                <div class="rows">
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">search</h3><hr>
                                <div class="searchBar">
                                    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">Most Searched</h3><hr>
                                <ul class="card-category mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h1>All News</h1><hr>
                <div class="rows">
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-1.png" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-2.jpeg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-3.jpeg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-4.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-5.jpg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="assets/berita-6.jpeg" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Halo semua</h3></a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia semper urna a semper. Mauris sollicitudin varius purus.</p>
                                <span class="card-author">Tri Widiarsih</span>
                                <span class="card-date">12 November 2001</span>
                            </div>
                        </div>                        
                    </div>                    
                </div> 
                <div class="containers" style="margin-top:0">
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>                               
            </div>            
        </div>
    </div>
    <footer>
        <p>Copyright &copy; Chihuy Corps 2022</p></div>
    </footer>
</body>
</html>