<!DOCTYPE html>
<html>
<head>
<style>
	
table {
  font-family: poppins;

 
 
}


</style>
</head>
<body>



<form enctype="multipart/form-data" action="<?= base_url().'admin/login/login_post' ?>" method="post">
        
<div class="container-fluid pt-4 px-4">
<h2 style="color:blue;text-align:center;padding:50px;">AVAILABLE OF BOOKS IN LIBRARY</h2>
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Books</th>
                                    <th scope="col">No.of.books</th>
                                    <th scope="col">Magazine</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Java Programming</td>
                                    <td>05</td>
                                    <td>The Hindu</td>
                                    
                                   
                                   
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>C Programming</td>
                                    <td>10</td>
                                    <td>Thanthi</td>
                                 
                                    
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Python Programming</td>
                                    <td>03</td>
                                    <td>Times Now</td>
                                  
                                    
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>Php</td>
                                    <td>03</td>
                                    <td>Economic Time</td>
                                
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
  
</table>

</body>
</html>

