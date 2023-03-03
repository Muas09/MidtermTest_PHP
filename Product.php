<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="product.css">
    <title>BÁN SẢN PHẨM </title>
    
</head>
<body>
    <?php 
    $Products = 
    array (
    'GIÀY DÉP ' => array(
        array(
            'ID'=>'1',
            'img' => 'https://tuvanmuasam.com/wp-content/uploads/2020/09/giay-sneaker-nu-loai-nao-tot-1.jpg',
            'name' => 'GIÀY HỒNG SIÊU ĐẸP',
            'code'=>'DK142',
            'price' => '1.131.990.000 ₫',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'ID'=>'2',
            'img' => 'https://kata.vn/userfiles/product/10451.jpg',
            'name' => 'GIÀY BOOT PHIÊN BẢN MỚI NHẤT',
            'code'=>'DK623',
            'price' => '7.000.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'ID'=>'3',
            'img' => 'https://thieuhoa.com.vn/wp-content/uploads/2022/12/v1MxDPlopEipAULWIgdWu1mC8Q1omdzCnlGzdzey.webp',
            'name' => ' GIÀY BOOT ĐEN SIÊU NGẦU ',
            'code'=>'DK673',
            'price' => '1.900.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
        ),

        array(
            'ID'=>'4',
            'img' => 'https://timvieclamtot.vn/uploads/product/2020_02/giay-boot-nu-cao-got-phong-cach-han-quoc-cao-9cm-mau-trang-k/giay-boot-nu-cao-got-phong-cach-han-quoc-cao-9cm-mau-trang-k161069727269.jpg',
            'name' => ' GIÀY BOOTS GÓT CAO',
            'code'=>'DK993',
            'price' => '2.700.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
             ),

            ),


    'TÚI SÁCH' => array(
        array(
            'ID'=>'5',
            'img' => 'http://file.hstatic.net/1000103112/article/tui-xach-hang-hieu-tphcm-4_1024x1024.jpg',
            'name' => 'TÚI DIOR PHIÊN BẢN NHIÊU NGƯỜI MUA',
            'code'=>'GTD423',
            'price' => '1.700.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
           ),
        array(
            'ID'=>'6',
            'img' => 'https://salt.tikicdn.com/ts/tmp/82/e9/6e/c96ce8024cc35141ceab2030a6a5455b.jpg',
            'name' => 'TÚI XÁCH DA BÒ',
            'code'=>'GTD103',
            'price' => '30.300.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'ID'=>'7',
            'img' => 'https://prices.vn/storage/photo/product/tui-xach-nu-tui-deo-cheo-dep-ht01-mau-hong-xanh-cam-trang-kich-thuoc-23cm-thoi-trang-cong-so.png',
            'name' => 'TÚI ĐEO CHÉO SIÊU DỄ THƯƠNG',
            'price' => '1.700.000đ',
            'code'=>'GTD123',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'ID'=>'8',
            'img' => 'https://product.hstatic.net/1000084161/product/tui-xach-nu-lata-tx09-mau-bo-dam__2__187b7a055af94dd4801b7b79328024dc_master.jpg',
            'name' => 'TÚI XÁCH NỮ HÀNG HIỆU CAO CẤP',
            'code'=>'GTD923',
            'price' => '14.900.000đ',
            'oldprice' => null,
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),

        ));
?>
<div id="container">
    <?php 

    foreach ($Products  as $key => $value) { ?>
        <div class="title"> 
            <?php echo $key ?>
    </div>
        <div class="card-group">

                <?php
                sort($Products );
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="product_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                        <div id="product_name" class="card-title"><?php echo $v['name'] ?> </div>
                        <div id="product_code" class="card-title"><?php echo $v['code'] ?> </div>
                        <div id="product_oldprice" class="card-title"><?php echo $v['oldprice'] ?> </div>
                        <div id="product_price" ><?php echo $v['price'] ?></div>
                        <div id="product_feedback">
                            <?php 
                                $quatity_star= $v['feedback']['quatity_star'];
                                for ($i=0; $i< $quatity_star; $i++) {
                                    echo '<span class="star"><i class="fa-sharp fa-solid fa-star"></i></span>';};

                            echo '<span>  ' .$v['feedback']['quatity_feedback']. '</span>';
                            ?>
                        </div>
                        <div onclick='tb()' class='mua'><?php echo '<input type="submit" name="submit" value="Đặt mua">';?></div>
                        
                    </div>
                    </div>
            <?php }
                ?>

        </div>
    <?php } ?>
</div>
</body>
<script>
    const tb = () =>{
        alert ('Thank you your order ')
    }
</script>
</html>