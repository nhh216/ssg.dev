<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend::includes.script_top_2')

    @stack('top')
</head>
<body id="post-detail">
<div class="container-fluid" >
    <div id="page-overlay" style="z-index: 999; background-color: rgba(0, 0, 0, 0.2); display: none;"></div>
    <div id="app-vuejs" class="container">

    @include('frontend::modules.page_header')
    {{--@include('frontend::modules.bradcrumb.bradcrump')--}}
    @yield('content')

    </div>
</div>
@include('frontend::includes.script_bot_2')
<script type="text/javascript">
    var app = new Vue({
        el: '#app-vuejs',
        data: {
            listProduct: {},
            keySearch: '',
            styleObj: {},
            htmlLine: '',
        },
        methods: {
            getSearchInput: function () {
                this.styleObj = {
                    'visibility': 'visible',
                    'max-height': '500px',
                    'height': 'auto',
                },
                    axios.get('/find-product/' + this.keySearch)
                        .then((response) => {
                            this.listProduct = response.data;
                        }).catch(function (error) {
                        console.log(error);
                    });

            },
            clickedSearhInput: function (event) {
                $('#page-overlay').css('display', 'block');
            }
        },
    })
</script>
<script>

    $('#page-overlay').click(function () {
        $(this).css('display', 'none');
        $('.header-share-nav').css('visibility','hidden')
        $('#search-result').css('visibility','hidden');
     ;

    });
    $('#search-input').click(function () {
        $('#search-result').css('visibility','visible');
    });
    $('.nav-btn-wrapper').click(function () {
        $('.header-share-nav').css('visibility','visible');
        $('#page-overlay').css('display', 'block');
    });

</script>
</body>
</html>