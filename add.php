<?php include 'connector.php';
    function file_handler() {

            $allowed_image_extension = array(
                "png",
                "jpg",
                "jpeg"
            );
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            echo json_encode($check);
            // Get image file extension
            $file_extension = pathinfo($_FILES["image"]["tmp_name"], PATHINFO_EXTENSION);
            echo json_encode($file_extension);
            // Validate file input to check if is not empty
            if (! file_exists($_FILES["image"]["tmp_name"])) {
                $response = array(
                    "type" => "error",
                    "message" => "Choose image file to upload."
                );
            }    // Validate file input to check if is with valid extension
            else if (! in_array($file_extension, $allowed_image_extension)) {
                $response = array(
                    "type" => "error",
                    "message" => "Upload valiid images. Only PNG and JPEG are allowed."
                );
            }    // Validate image file size
            else if (($_FILES["image"]["size"] > 2000000)) {
                $response = array(
                    "type" => "error",
                    "message" => "Image size exceeds 2MB"
                );
            } else {
                $target = "image/" . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
                    $response = array(
                        "type" => "success",
                        "message" => "Image uploaded successfully.",
                        "address" => $target
                    );
                
                } else {
                    $response = array(
                        "type" => "error",
                        "message" => "Problem in uploading image files."
                    );
                }
            }
            return $response;
    }

    if (isset($_COOKIES["username"]) == True) {
        header("Location: /login.php");
    }
    else {
        $chocolate_name = $_POST["name"];
        $chocolate_price = $_POST["price"];
        $chocolate_description = $_POST["description"];
        $chocolate_image = "";
                $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
                $width = $fileinfo[0];
                $height = $fileinfo[1];
                
                $allowed_image_extension = array(
                    "png",
                    "jpg",
                    "jpeg"
                );
                
                // Get image file extension
                $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
                
                // Validate file input to check if is not empty
                if (! file_exists($_FILES["file-input"]["tmp_name"])) {
                    $response = array(
                        "type" => "error",
                        "message" => "Choose image file to upload."
                    );
                    echo 'file exist check';
                    echo json_encode($response);
                }    // Validate file input to check if is with valid extension
                else if (! in_array($file_extension, $allowed_image_extension)) {
                    $response = array(
                        "type" => "error",
                        "message" => "Upload valiid images. Only PNG and JPEG are allowed."
                    );
                    echo $result;
                }    // Validate image file size
                else if (($_FILES["file-input"]["size"] > 2000000)) {
                    $response = array(
                        "type" => "error",
                        "message" => "Image size exceeds 2MB"
                    );
                } else {
                    $target = "image/" . basename($_FILES["file-input"]["name"]);
                    if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
                        $response = array(
                            "type" => "success",
                            "message" => "Image uploaded successfully.",
                            "address" => basename($_FILES["file-input"]["name"])
                        );
                    } else {
                        $response = array(
                            "type" => "error",
                            "message" => "Problem in uploading image files."
                        );
                    }
                }
            echo json_encode($response);
            $chocolate_image = $response;

            if ($chocolate_image["type"] == "error") {
                $chocolate_image["address"] = "NULL";
                echo json_encode($chocolate_image);
                exit();
            }
        $chocolate_amount = $_POST["amount"];
        $connector = new Connector();
        $query = "INSERT INTO chocolate (name, price, description, image, amount) VALUES ('{$chocolate_name}', {$chocolate_price}, '{$chocolate_description}', '{$chocolate_image["address"]}', {$chocolate_amount})";
        $connector->run($query);
        $connector->close();
        header("Location: /add.html");
    }
    
?>
