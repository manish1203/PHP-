$sql = "INSERT INTO crud(name,email,mobile) values('{$name}','{$email}','{$mobile}')";
        if(mysqli_query($conn,$sql)){
            echo 'Record Inserted';