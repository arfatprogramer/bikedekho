<?php include"./adminlayot/header.php";?>
<div class="container p-5">
  <h1 name="name">View Users</h1>
  <div class="table">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Gmail</th>
        <th scope="col">Status</th>
        <th id="option"scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td >Active</td>
        <td>
        <button type="button" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-danger">Delete</button>
        </td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<?php include"./adminlayot/footer.php";?>