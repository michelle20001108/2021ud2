<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- CKEditor 4 -->
    <script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>
</head>
<body>
    <div class="coontainer">
    <h1 class="display-1"><i class="bi bi-wrrench"></i>客戶資訊<i class="bi bi-award"></i></h1>
    
    <form>
        <div class="mb-3">
            <label for="bookname" class="form-label">姓名</label>
            <input type="text" class="form-control" id="bookname" name="bookname" placeholder="請輸入書名">
        <!--    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="bookname" class="form-label">臉書名稱</label>
            <input type="text" class="form-control" id="bookname" name="bookname" placeholder="請輸入您的臉書名">
        <!--    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>        

        <div class="mb-3">
            <label for="author" class="form-label">電話</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="請輸入電話號碼">
        <!--    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="請輸入email">        
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">地址</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="請輸入寄送地址">
            <div id="address" class="form-text">We'll never share your address with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="pubdate" class="form-label">訂購日期</label>
            <input type="date" class="form-control" id="pubdate" name="pubdate" placeholder="請輸入日期">
        <!--    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
            <label for="pubdate" class="form-label">訂購數量</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="請輸入訂購的商品數量">        
        </div>
        
        
        <div class="mb-3 form-check-inline">
            <input type="radio" class="form-check-input" name="booktype" id="inlineRadio1">
            <label for="form-check-label" class="inlineRadio1">已匯款</label>        
        </div>
        <div class="mb-3 form-check-inline">
            <input type="radio" class="form-check-input" name="booktype" id="inlineRadio2">
            <label for="form-check-label" class="inlineRadio2">未匯款</label>      
        </div>
        <div class="mb-3 form-check-inline">
            <input type="radio" class="form-check-input" name="booktype" id="inlineRadio4">
            <label for="form-check-label" class="inlineRadio4">其他付款方式</label>        
        </div>

        <div class="mb-3">
            <label for="intro" class="form-label">備註</label>
            <textarea type="intro" class="form-control" id="intro" name="intro" cols="80" rows="10" placeholder="輸入其他需求"></textarea>        
        </div>
        <script>
                CKEDITOR.replace( 'intro' );
        </script>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="pubyn">
            <label for="pubyn" class="form-check-label">是否公佈</label>        
        </div>
        <div class="input-group mb-3">
            <label for="input-group-text" for="cover">  上傳資料  </label>
            <input type="file" class="form-control" id="cover" name="cover">        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>