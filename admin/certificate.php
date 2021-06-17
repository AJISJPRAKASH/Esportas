<!DOCTYPE html>
<html>
<head>
    
    <title>signup</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js">
<link href="https://code.jquery.com/jquery-3.5.1.js">
<link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
<link href="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="sign.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script Type="text/JavaScript" src="checksignup.js"></script>
<script Type="text/JavaScript" src="table.js"></script>
<script Type="text/JavaScript" src="search.js"></script>


<style>
    
.file-upload input[type='file'] {
  display: none;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
  background: #00B4DB;
  background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
  background: linear-gradient(to right, #0083B0, #00B4DB);
  height: 100vh;
}

.rounded-lg {
  border-radius: 1rem;
}

.custom-file-label.rounded-pill {
  border-radius: 50rem;
}

.custom-file-label.rounded-pill::after {
  border-radius: 0 50rem 50rem 0;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light py-1  shadow-sm p-3 mb-5 bg-white rounded">
<div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong><span class="logoname">ESPORTAS</strong></span></a>
 <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
 <div id="navbarSupportedContent" class="collapse navbar-collapse">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item active"><a href="adminhome.php" class="nav-link font-italic"> Home </a></li>

     <li class="nav-item active"><a href="../home.php" class="nav-link font-italic"> Vist Site </a></li>
     <li class="nav-item active"><a href="view.php" class="nav-link font-italic">Certificate view</a></li>
     <li>
       <p >
         <a href="#" class="btn btn-info"   data-toggle="modal" data-target="#exampleModal">
           <span class="logout"> Log out</span>
         </a></p>
       </p> 
     </li>
   </ul>
 </div>
</div>
</nav>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Sign out</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
            Are you sure you want to sign out
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Sign out</button>
           </div>
         </div>
       </div>
     </div>


<section>
  <div class="container p-5">
    <!-- For demo purpose -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="row mb-5 text-center text-white">
      <div class="col-lg-10 mx-auto">
        <h1 class="display-4">Certificate  upload  </h1>
        <p class="lead">Upload a  Participants Certificate   </p>
      </div>
    </div>
    <!-- End -->


    <div class="row">
      <div class="col-lg-5 mx-auto">
        <div class="p-5 bg-white shadow rounded-lg"><img src="https://res.cloudinary.com/mhmd/image/upload/v1557366994/img_epm3iz.png" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">

          <!-- Default bootstrap file upload-->

          <h6 class="text-center mb-4 text-muted">
            You can use default  file upload
          </h6>
          <div class="overflow-hidden rounded-pill">
          <input class="form-control" type="text"  name="chs" placeholder="Chess no.." autocomplete="off">
          </div>
          <div >
         <select class="form-control selectpicker" id="select-country" name="enm" data-live-search="true">
        <option value="" disabled selected>Choose Eventname</option>
          <option value="100m_b">100m(B)</option>
          <option value="100m_g">100m(G)</option>
          <option value="200m_b">200m(B)</option>
          <option value="200m_g">200m(G)</option>
          <option value="400m_b">400m(B)</option>
          <option value="400m_g">400m(G)</option>
          <option value="800m_b">800m(B)</option>
          <option value="800m_g">800m(G)</option>
          <option value="1500m_b">1500m(B)</option>
          <option value="1500_g">1500m(G)</option>
          <option value="3000m_b">3000m(B)</option>
          <option value="3000m_g">3000m(G)</option>
          <option value="dicuss_b">Dicuss(B)</option>
          <option value="dicuss_g">Dicuss(G)</option>
          <option value="javelin_b">Javelin(B)</option>
         <option value="shotput_b">Shotput(B)</option>
          <option value="shotput_g">Shotput(G)</option>
          <option value="highjump_b">Highjump(B)</option>
          <option value="highjump_g">Highjump(G)</option>
          <option value="longjump_b">Longjump(B)</option>
          <option value="longjump_g">Longjump(G)</option>
         </select>
         </div>
          <div class="custom-file overflow-hidden rounded-pill mb-5">
            
            <input type="file"  name="file"  class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
            
          </div>
          <!-- End -->

          <!-- End -->
          <button type="submit" class="form-control btn btn-secondary" name="btn-upload">Upload</button>
        </div>
      </div>
    </div>
    </form>
    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <CENTER>
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php" ><p style="color:blue">click here to view file.</p></a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
 }
 ?></CENTER>
  </div>
</section>

</body>
</html>