<script>
    const left = document.querySelector(".left-nav");
    const mid = document.querySelector(".mid-content");
    const right = document.querySelector(".right-nav");
    const ham = left.querySelector(".nav-left-clicker");
    const leftMenu = left.querySelector(".menu");
    const add = mid.querySelector("#button-add");
    const task = mid.querySelectorAll(".head-task");
    const close = right.querySelector(".nav-right-clicker");

    ham.addEventListener("click", () => {
        mid.classList.toggle("mid-active");
        left.classList.toggle("left-active");
        leftMenu.classList.toggle("left-menu-active");
        right.classList.remove("right-nav-active");
        mid.classList.remove("mid-active-right");
    });

    add.addEventListener("click", () => {
        right.classList.add("right-nav-active");
        mid.classList.add("mid-active-right");
        mid.classList.remove("mid-active");
        left.classList.remove("left-active");
        leftMenu.classList.remove("left-menu-active");
    });

    close.addEventListener("click", () => {
        right.classList.remove("right-nav-active");
        mid.classList.remove("mid-active-right");
    });

    task.forEach(element => {
        element.addEventListener("click", () => {
            element.nextElementSibling.style.display = (element.nextElementSibling.style.display == "none") ? "block" : "none";
        })
    });

    $('#delete').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var id = button.data('id_task');
            var modal = $(this)
            modal.find('.modal-body #task_id').val(id);
    })

</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
