<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HariOmSaiSadan | Documents</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        /* Set a max height for the modal body and allow overflow */
        .modal-body {
            max-height: 80vh;
            /* 80% of the viewport height, you can adjust this */
            overflow-y: auto;
            /* Enable vertical scrolling */
            padding: 10px;
        }

        .pop-up {
            z-index: 999999;
        }

      
    </style>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include './Components/Header.html'; ?>


    <!-- Offcanvas Menu Begin -->
    <section class="latest spad" id="documents">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Transparency Matters</span>
                        <h2>Important Documents</h2>
                    </div>
                </div>
            </div>
            <!-- Latest Blog Section Begin -->
            <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                    <a data-bs-toggle="modal" data-bs-target="#imp-doc1"
                    class="cs_post_thumb cs_radius_5 overflow-hidden d-block cs_mb_29 cs_mb_lg_20 position-relative">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="img/Documents/HOSS-CHS-Pre-79A-File.png">
                            </div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt=""> 08 April 2025</span>
                                <h5>Hari Om Sai Sadan CHS Pre 79A File</h5>
                            </div>
                        </div>
                        </a>
                    </div>
            </div>
    </section>
   
    <!-- Offcanvas Menu End -->
 

    <!-- Header Section Begin -->
  
   

    <!-- Footer Section Begin -->
    <?php include './Components/Footer.html'; ?>
    


    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="imp-doc1" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="pdf-canvas-container-impdoc1"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <script>
        // Function to render PDF
        function renderPDF(pdfUrl, containerId) {
            const canvasContainer = document.getElementById(containerId);

            // Ensure the container exists
            if (!canvasContainer) {
                console.error(`Container with ID "${containerId}" not found.`);
                return;
            }

            // Clear previous content in the container
            canvasContainer.innerHTML = '';

            // Load PDF document
            const loadingTask = pdfjsLib.getDocument(pdfUrl);

            loadingTask.promise.then(function (pdf) {
                console.log(`Total Pages: ${pdf.numPages}`);

                // Render each page
                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    pdf.getPage(pageNum).then(function (page) {
                        const scale = 1.3; // Adjust zoom level
                        const viewport = page.getViewport({
                            scale
                        });

                        // Create canvas element for this page
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');

                        canvas.width = viewport.width;
                        canvas.height = viewport.height;

                        // Render PDF page onto canvas
                        page.render({
                            canvasContext: context,
                            viewport
                        }).promise.then(() => {
                            console.log(`Rendered page ${pageNum}`);
                        });

                        // Append canvas to the container
                        canvasContainer.appendChild(canvas);
                    });
                }
            }).catch(function (error) {
                console.error('Error loading PDF:', error);
            });
        }
    </script>
    <script>
        //tab2 start
        document.getElementById('imp-doc1').addEventListener('show.bs.modal', function () {
            renderPDF('./Documents/Hari Om Sai Sadan CHS Pre 79A File.pdf', 'pdf-canvas-container-impdoc1');
        });
    </script>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

</body>


</html>