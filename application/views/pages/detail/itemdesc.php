<style type="text/css">
.desc {
    width: 800px;
}

.desc__title {
    font-size: 24px;
}

.desc__price {
    color: rgba(0,0,0,.75);
}

.form-group {
    display: flex;
    align-items: center;
    width: 110px;
    margin-left: 15px;
    border-bottom: 1px solid #aaa;
}

.form-group > div {
    flex-basis: 50px;
}

.form-group select {
    border: 0;
    border-radius: 0;
    flex-basis: 60px;
}

.form-group select:focus {
    box-shadow: 0 0 0px transparent;
}


</style>

<div class="desc">
    <div class="desc__title">
        [Ini Judul]
    </div>
    <div class="desc__price">
        [Ini Harga]
    </div>
    <hr style="border: .5px solid #aaa; margin: 0;">
    <div class="desc__mini">
        [Ini Desc Bagian Atas]
    </div>
    <div class="col-4">
        <div class="footwear__sub">
            <img src="<?php echo base_url('assets/images/e_footwear/'.$row['image1']) ?> "/>
            <div class="footwear__desc">
                <div class="footwear__name"><?php echo $row['item_name'] ?></div>
                <div class="footwear__price"><?php echo $row['price'] ?></div>
            </div>
        </div>
    </div>
    <div class="col-8">
        <form action="" method="post" class="row">
        <div class="form-group">
            <div>Size : </div>
            <select class="form-control" name="size">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
        </div>
        <div class="form-group">
            <div>Qty : </div>
            <select class="form-control" name="qty">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit">ADD TO CART</button>
        <button type="submit">BUY NOW</button>
    </form>
    </div>
</div>