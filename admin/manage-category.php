<?php include('partials/menu.php')?>
    <div class="main-content">
        <div class="wrapper">
        <h1>Manage category</h1>
        <br /><br/>
             <!-- Button to add admin -->
             <a href="add-admin.php" class="btn-primary">Add Category</a>
             <br /><br /><br />
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pizza</td>
                    <td>
                        <img src="images/pizza.jpg" alt="" class="cate-img" style="width: 40%;">
                    </td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Category</a>
                        <a href="#" class="btn-danger">Delete Category</a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Burger</td>
                    <td><img src="images/burger.jpg" alt="" class="cate-img"style="width: 40%;" >
                    </td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Category</a>
                        <a href="#" class="btn-danger">Delete Category</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Momo</td>
                    <td><img src="images/momo.jpg" alt="" class="cate-img" style="width: 40%;">
                    /td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Category</a>
                        <a href="#" class="btn-danger">Delete Category</a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Quia est ipsum id id</td>
                    <td><img src="images/momo.jpg" alt="" class="cate-img" style="width: 40%;"> </td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>
                
                        <a href="#" class="btn-secondary">Update Category</a>
                        <a href="#" class="btn-danger">Delete Category</a>
                
                    </td>
                </tr>
            </table>


            </div>
            <br /><br />
        </div>
        

    </div>
<?php include('partials/footer.php')?>