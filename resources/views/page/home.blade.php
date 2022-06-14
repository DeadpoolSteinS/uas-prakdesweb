<!DOCTYPE html>
<html lang="en">
<head>
    @include('../layout/head')
</head>
<body>
    <div class="container-real">

        @include('../layout/header')

        
        <div class="main-content">
            <div class="left-nav">

                @include('../layout/leftbar')

            </div>
            <div class="mid-content">

                @include('../content/main')

                <div id="button-add">+</div>
            </div>

            @include('../modal/add-task')
        </div>

        @include('../modal/delete')

        @include('../modal/update-profile')

    </div>
    @include('../layout/footer')
</body>
</html>
