<!DOCTYPE html>
<html>
    <head>
        <title>&#128526; Product form </title>

    </head>

    <div class="" align="right">
        <a href="product.php" class="btn btn-outline-info">Back</a>
    </div>
    <?php
    require "connect.php"; 
    ?>
    <body>
        <form method="POST" action="" enctype="multipart/form-data">
            <table border="1" align="center" cellpadding="15" cellspacing="0">

                <tr>
                    <th colspan="2">
                        <h2>Add Product </h2>
                    </th>
                </tr>


                </tr>
                <?php
                    $sql = "SELECT * FROM `country` WHERE status='Active'";
                    $result = mysqli_query($conn, $sql); 
                    $status= '';   
                ?>
                <tr>
                    <th>Country</th>
                    <td>
                        <select name="country" id="country_id">
                            <option value="0">--select country--</option>

                            <?php
                                if ($result->num_rows > 0) 
                                {
                                    while ($row = $result->fetch_assoc()) 
                                        {
                            ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                            <?php
                                        }
                                }
                            ?>
                        </select>
                        <span style="color:red"><?php if (isset($_SESSION['error']['category_error'])) {
                                                                echo '<br>' . $_SESSION['error']['category_error'];
                                                                unset($_SESSION['error']['category_error']);
                            } ?></span>
                    </td>
                </tr>

                <tr>
                    <th>State</th>
                    <td>
                        <select name="state" id="state_id">
                            <option value="0">--select State--</option>

                        </select>
                        <span style="color:red"><?php if (isset($_SESSION['error']['category_error'])) {
                                                                echo '<br>' . $_SESSION['error']['category_error'];
                                                                unset($_SESSION['error']['category_error']);
                            } ?></span>
                    </td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>
                        <select name="city" id="city_id">
                            <option value="0">--select City--</option>
                        </select>
                        <span style="color:red"><?php if (isset($_SESSION['error']['category_error'])) {
                                                                echo '<br>' . $_SESSION['error']['category_error'];
                                                                unset($_SESSION['error']['category_error']);
                            } ?></span>
                    </td>
                </tr>
                <tr>
                    <th>description</th>
                    <td><input type="text" name="description">

                        <span style="color:red"><?php if (isset($_SESSION['error']['description_error'])) {
                                                                echo '<br>' . $_SESSION['error']['description_error'];
                                                                unset($_SESSION['error']['description_error']);
                            } ?></span>
                    </td>
                </tr>
                <tr>
                    <th>status</th>
                    <td><input type="radio" name="status" value="Active" <?php if ($status == 'Active') {
                                                                                            echo "checked";
                            } ?>>Active

                        <input type="radio" name="status" value="Deactive" <?php if ($status == 'Deactive') {
                                                                                            echo "checked";
                            } ?>>Deactive

                        <span style="color:red"><?php if (isset($_SESSION['error']['status_error'])) {
                                                                echo '<br>' . $_SESSION['error']['status_error'];
                                                                unset($_SESSION['error']['status_error']);
                            } ?></span>

                    </td>
                </tr>


                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit">
                        <input type="reset" name="clear" value="clear">
                    </td>
                </tr>
            </table>
        </form>

        <!-- //l``oad dynamic state as per country...................  -->

        <script src="./script.js"></script>
        <script>
            $('#country_id').on('change',function(){
                var country_id = $('#country_id').val();

                $.ajax({
                    type: 'POST',
                    url: './getState.php',
                    data: {'country_id':country_id}
                })
                .done(function(response) {
                    // demonstrate the response
                    if(response.length) {
                        var html  = '';
                        var res = $.parseJSON(response);
                        $.each(res, function(key,value) {
                            html  += '<option value="'+value.id+'" >'+value.state_name+'</option>';
                        });
                    }
                    $('#state_id').append(html);
                    // $('#response').html(data);
                })
                .fail(function() {
                    // if posting your form failed
                    alert("Posting failed.");
                });
            });

            <!-- //l``oad dynamic city as per state...................  -->

            $('#state_id').on('change',function(){
                var state_id = $('#state_id').val();

                $.ajax({
                    type: 'POST',
                    url: './getState.php',
                    data: {'state_id':state_id}
                })
                .done(function(response) {
                    // demonstrate the response
                    if(response.length) {
                        var html  = '';
                        var res = $.parseJSON(response);
                        $.each(res, function(key,value) {
                            html  += '<option value="'+value.id+'" >'+value.city_name+'</option>';
                        });
                    }
                    $('#city_id').append(html);
                    // $('#response').html(data);
                })
                .fail(function() {
                    // if posting your form failed
                    alert("Posting failed.");
                });
            });
            </script>
    </body>
</html>