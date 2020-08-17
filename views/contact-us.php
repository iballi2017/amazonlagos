<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="contact_us_page">
    <div class="cont_wrapper">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>

    <div class="title_container p-3">
        <div class="cont_wrapper">
            <h4 class="page_title text-center text-md-left m-0 text_capital">Contact Us</h4>
        </div>
    </div>

    <div class="page_banner my-3">
    </div>

    <div class="content_content_wrapper bg-white p-3">

        <div class="row">
            <div class="col-12 col-md-7 form_area">

                <div class="card-body">
                    <form action="#">
                        <div class="form_grp mb-4">
                            <label class="text_capital d-block" for="email">Email Address</label>
                            <input type="text" class="d-block w-100 py-2" name="email" id="email">
                        </div>
                        <div class="form_grp mb-4">
                            <label class="text_capital" for="message">Message</label>
                            <textarea rows="5" class="d-block w-100 py-2 text-left" name="message"
                                id="message"></textarea>
                        </div>
                        <div class="form_grp mb-4">
                            <button class="py-2 px-5 light_grn_btn rounded">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5 texts_area">
                <div class="card-body">
                    <h5>FOR MOR INFORMATIONS</h5>
                    <ul class="p-0">
                        <li>Email Address:&nbsp;1ooopaaaa@yahoo.com</li>
                        <li>Phone number:&nbsp;+234 6890 456 3</li>
                        <li>Location:&nbsp;23, adesanya street, iyolope lga, Lagos state.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- footer -->
<?php include_once '../components/footer.php'; ?>