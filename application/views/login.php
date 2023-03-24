<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="assets/js/login.js"></script>


<script>
    let baseUrl = '{base_url}'

    function base_url(url) {
        if (url == '') {
            return baseUrl;
        } else {
            return baseUrl + url;
        }
    }
</script>

<div class="container">
    
    <form action="" id="formLogin">
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input type="text" name="password" class="form-control" id="">
    </div>
    </form>
    
    <button id="btnLogin" class="btn btn-primary">Login</button>
</div>
