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
<link rel="stylesheet" type="text/css" href="style1.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script Type="text/JavaScript" src="table.js"></script>
</head>
<body>

<div class="container py-5">
    <header class="text-center ">
    <h1 class="display-4"> Participants</h1>
    
   
  </header>
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>Name</th>
            <th>Chessno</th>
            <th>Eventname</th>
            

            </tr>
            </thead>
            <tbody>

                <?php
                    $conn = mysqli_connect("localhost", "root","", "sports"); 
                    $sql="SELECT * FROM participants";
                    $result= mysqli_query($conn,$sql);
                    while( $row = mysqli_fetch_assoc( $result ) ) : ?>
                    <tr>
                          <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['chessno']; ?></td>
                        <td><?php echo $row['eventname']; ?></td>
                    </tr>
                    
                   
                    <?php endwhile; ?>

</body>
</html>
